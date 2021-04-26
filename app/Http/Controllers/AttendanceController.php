<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        return view('attendance.attendance');
    }

    public function ChooseRollSheet(){
        $departments = Department::all();
        $years = AcademicYear::all(); 
        return view('attendance.rollcall',compact('departments','years'));
    }
    public function ShowRollSheet(Request $request){
        $students = Student::where([
            ['academicyear_id','=',$request->year],
            ['department_id','=',$request->department]
        ])->get();
        $major = Department::where('id',$request->department)->get();
        $year = AcademicYear::where('id',$request->year)->get();
        return view('attendance.rollsheet',compact('students','major','year'));
    }
    public function SetRollCall(Request $request){
        $inputstatus = $request->input('status');
        $inputstudentID = $request->input('studentID');
        $results = $request->all();
        $statuscount = count($inputstatus);
        $IDcount = count($inputstudentID);
            $i = 0;
            while($i < $IDcount){
               $attendance = new Attendance();
               $attendance->studentID = $inputstudentID[$i];
               $attendance->attendance_status = $inputstatus[$i];
               $attendance->save();
                $i++;
            }

        // for($i=0;$i<$IDcount;$i++){
        //     $attendance->studentID = $inputstudentID[0];
        //     $attendance->studentID = $inputstudentID[$i];
        // }
        // for($j=0;$j<$statuscount;$j++){
        //     $attendance->attendance_status = $inputstatus[0];
        //     $attendance->attendance_status = $inputstatus[$j];
        // }
        return redirect("attendance");
    }
}
