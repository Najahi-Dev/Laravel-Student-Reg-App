<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function studentForm(){
        $studentList = student::all();
        return view('student-reg',compact('studentList'));
    }

    public function addStudent(Request $request){
        // dd($request -> all());
        student::create($request -> all());
        return redirect()->route('home')->with('message','Submitted Successfully'); //this name home is route; I call this name here
    }
}
