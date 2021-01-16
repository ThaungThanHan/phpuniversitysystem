<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Student;
use App\Models\Position;
use App\Models\Department;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Http\Requests\studentcreateRequest;

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
        $academicyears = AcademicYear::all();
        return view('students.students',compact('students','academicyears'));
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
        //
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
        //
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
