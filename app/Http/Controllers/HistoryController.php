<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student;
use App\Answer;
use App\Examinfo;

class HistoryController extends Controller
{
    public function index(){

    	$data = DB::table('examinfos')->get();

    	//$data_course_code=Student::where('uniqueid',$getUniqueId)->get();
    	//$users = $data_course_code->count();
    	//$getCourseCode=Examinfo::where(['course'=> $getUniqueId])->value('uniqueid');
    	//$count = Student::where('uniqueid','=','$getUniqueId')->count();

    	 

    	//echo $count;

    	return view('history.index')->with('data',$data);
    }
}
