<!DOCTYPE html>
<html>
<head>
	<title>All Fees</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
	<style type="text/css">
table, td, th{
	style="border: 1px solid #DEE2E6;"
}
	</style>
</head>
<body>
	<br><br>
	<center>
	<div>
		<a href="/"><button class="btn btn-primary">Home</button></a>
		<a href="/search/fees"><button class="btn btn-primary">Search</button></a>
<br><br>
<i><h4>All Fees Payments</h4></i>
		<table align="center" class="table table-strippped" style="width:50%; border: 1px solid #DEE2E6;">
			<tr style="border: 1px solid #DEE2E6;">
				<th style="border: 1px solid #DEE2E6;">Student Number</th>
				<th style="border: 1px solid #DEE2E6;">Full Name</th>
				<th style="border: 1px solid #DEE2E6;">Email Address</th>
				<th style="border: 1px solid #DEE2E6;">Payment Date</th>
				<th style="border: 1px solid #DEE2E6;">Amount</th>
			</tr>
			@foreach($fees as $value)
			<tr>
			<td style="border: 1px solid #DEE2E6;">{{$value->student_no}}</td>
			<td style="border: 1px solid #DEE2E6;">{{$value->full_name}}</td>
			<td style="border: 1px solid #DEE2E6;">{{$value->email_address}}</td>
			<td style="border: 1px solid #DEE2E6;">{{$value->payment_date}}</td>
			<td style="border: 1px solid #DEE2E6;">{{$value->amount}}</td>
		</tr style="width:50%; border: 1px solid #DEE2E6;">
		@endforeach
		</table>
		<p>Total amount paid: {{$sum}}</p>
			@if ($errors->any())
		<div>
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
    
		</div>
	</div>
    @endif
	</div>
</center>
</body>
</html>