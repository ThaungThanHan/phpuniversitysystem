<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Requests\createProgramRequest;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('programs.programs',compact('programs'));
    }
    public function create(){
        return view('programs.create_programs');
    }

    public function store(createProgramRequest $request){
        $program = new Program();
        $program->title = $request->title;
        $program->description = $request->description;
        $program->program_type = $request->program_type;
        $program->host_country = $request->host_country;
        $program->eligible_country = $request->eligible_country;
        $program->deadline = $request->deadline;
        $program->duration = $request->duration;
        $program->start_date = $request->start_date;
        $program->eligibilities = $request->eligibilities;
        $program->end_date = $request->end_date;
        $program->admin = $request->admin;
        $program->website = $request->website;
        $program->benefits = $request->benefits;

        $image = date('YmdHis').'.'.request()->program_image->getClientOriginalExtension();
        request()->program_image->move(public_path('images'),$image);
        $program->program_image = $image;

        $program->save();
        return redirect('/programs')->with('messages','Program successfully created');
    }
}
