<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Student; 

class StudentController extends Controller
{
	protected $database = 'student_records';
	
    public function store(Request $request)
	{
		$validate = $request->validate([
        'student_no'=>'required|unique:student',
        'full_name'=>'required',
        'email_address'=>'required',
        'birth_date'=>'required',
		]);

		$student_no = $request->input('student_no');
		$full_name=$request->input('full_name');
		$email_address=$request->input('email_address');
		$birth_date=$request->input('birth_date');

		$data = array('student_no'=>$student_no,'full_name'=>$full_name,'email_address'=>$email_address,'birth_date'=>$birth_date);

		DB::table('student')->insert($data);

		echo "<script type='text/javascript'>alert('Registration successful')</script>";
		echo "<script>setTimeout(\"location.href = '/register';\",1000);</script>";
	}
}
