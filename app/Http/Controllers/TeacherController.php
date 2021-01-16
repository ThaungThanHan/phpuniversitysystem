<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\createTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.teachers',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $positions = Position::all();
        return view('teachers.create_teachers',compact('departments','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createTeacherRequest $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->department_id = $request->department;
        $teacher->father_name = $request->father_name;
        $teacher->address = $request->address;
        $teacher->gender = $request->gender;
        $teacher->birthday = $request->birthday;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->position_id = $request->position;
        $teacher->phone_number = $request->phone_number;

        $image = date('YmHis').".".request()->teacher_image->getClientOriginalExtension();
        request()->teacher_image->move(public_path('images'),$image);
        $teacher->teacher_image = $image;
        $teacher->save();
        return redirect('teachers')->with('messages','Successfully added teacher!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.view_teacher',compact('teacher')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $departments = Department::all();
        $positions = Position::all();
        return view('teachers.update_teachers',compact('teacher','departments','positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        request()->validate([
            'name' => 'required',
            'position' => 'required',
            'department' => 'required',
            'teacher_id' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'birthday' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
        $teacher->name = $request->name;
        $teacher->department_id = $request->department;
        $teacher->father_name = $request->father_name;
        $teacher->address = $request->address;
        $teacher->gender = $request->gender;
        $teacher->birthday = $request->birthday;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->position_id = $request->position;
        $teacher->phone_number = $request->phone_number;

        if($request->teacher_image){
            $image = date('YmdHis').'.'.request()->teacher_image->getClientOriginalExtension();
            request()->teacher_image->move(public_path('images'),$image);
            $teacher->teacher_image = $image;
        }
        $teacher->save();
        return redirect('teachers')->with('messages','Teacher profile successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
