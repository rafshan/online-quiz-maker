<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\Answer;
use App\Examinfo;

class MarksController extends Controller
{
    public function index()
    {
        //
            return view('marks.index');
          }


   public function create(Request $var){
       
        $getExamCode=$var->input('exam_code');
        $data_exam_code = Student::where('uniqueid', $getExamCode)->get();

        $getId=$var->input('course_code');
        $getCourseCode=Examinfo::where(['course'=> $getId])->value('uniqueid');
        $data_course_code=Student::where('uniqueid',$getCourseCode)->get();
      
        return view('marks.marks')->with('course',$getCourseCode)->with('data_exam_code', $data_exam_code)->with('data_course_code', $data_course_code);

    }
}