<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Student;
use App\Models\Position;
use App\Models\Department;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Http\Requests\studentcreateRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $user = Auth::user();
        $academicyears = AcademicYear::all();
        // dd($user);
        return view('students.students',compact('students','academicyears','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $academicyears = AcademicYear::all();
        $departments = Department::all();
        $positions = Position::all();
        return view('students.create_students',compact('academicyears','departments','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(studentcreateRequest $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->department_id = $request->department;
        $student->father_name = $request->father_name;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->student_id = $request->student_id;
        $student->academicyear_id = $request->year;
        $student->phone_number = $request->phone_number;

        $imageName = date('YmdHis').".".request()->student_image->getClientOriginalExtension();
        request()->student_image->move(public_path('images'),$imageName);
        $student->student_image = $imageName;
        $student->save();
        return redirect('students')->with('message','Student added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student = Student::find($id);
        return view('students.view_student',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $academicyears = AcademicYear::all();
        $departments = Department::all();
        return view('students.update_students',compact('student','departments','academicyears'));
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
        $student = Student::find($id);
        request()->validate([
            'name' => 'required',
            'year' => 'required',
            'department' => 'required',
            'student_id' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'birthday' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
        $student->name = $request->name;
        $student->department_id = $request->department;
        $student->father_name = $request->father_name;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->student_id = $request->student_id;
        $student->academicyear_id = $request->year;
        $student->phone_number = $request->phone_number;

        if($request->student_image){
            $image = date('YmdHis').'.'.request()->student_image->getClientOriginalExtension();
            request()->student_image->move(public_path('images'),$image);
            $student->student_image = $image;
        }
        $student->save();
        return redirect('students')->with('messages','Student profile successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students')->with('messages','Student deleted successfully!');
    }
}
