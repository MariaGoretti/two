<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use DateTime;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
	protected $database = 'student_records';
	
    public function store(Request $request)
	{
		$validate = $request->validate([
        'student_no'=>'required|min:0|exists:student,student_no',
        'amount'=>'required|min:0',
        'full_name'=>'required',
        'email_address'=>'required',
        //'payment_date'=>'required',
		]);

		$now = new DateTime();
		$student_no = $request->input('student_no');
		$full_name=$request->input('full_name');
		$email_address=$request->input('email_address');
		$amount=$request->input('amount');
		$payment_date=$now;

		$data = array('student_no'=>$student_no,'payment_date'=>$payment_date, 'amount'=>$amount, 'email_address'=>$email_address, 'full_name'=>$full_name);

		DB::table('fees')->insert($data);

		echo "<script type='text/javascript'>alert('Payment successful')</script>";
		echo "<script>setTimeout(\"location.href = '/fees';\",1000);</script>";

}
	public function view()
	{
		$fees = Fees::all();
		$sum = $fees->sum('amount');

		return view('kisenga.view', compact('fees'), compact('sum'));
	}

	 public function search(Request $request)
	{
		$student_no =$request->input('student_no');
		$fees = Fees::where('student_no',$student_no)->get();
		$sum = $fees->sum('amount');
		return view('kisenga.search', compact('fees'), compact('sum'));
	}

}
