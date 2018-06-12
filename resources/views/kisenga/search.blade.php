<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</head>
<body>
	<br><br>
	<center>
	<div>
		<a href="/"><button class="btn btn-primary">Home</button></a>
		<a href="/view/fees"><button class="btn btn-primary">View All Payments</button></a>
<br><br>
<h4>Search Fees Payment Record</h4><br>
			<body align="center">
	<div>

		<table align="center" class="table table-strippped" style="width:50%;">
			<form action="/search/fees" method="get">
				{{csrf_field()}}
				<label>Student Number:</label> 
				<input type="number" name="student_no">
				<input type="submit" name="search">

			</form>
			<tr>
				<th>Student Number</th>
				<th>Full Name</th>
				<th>Email Address</th>
				<th>Payment Date</th>
				<th>Amount</th>
			</tr>
			@foreach($fees as $value)
			<tr>
			   <td>{{$value->student_no}}</td>
			    <td>{{$value->full_name}}</td>
			    <td>{{$value->email_address}}</td>
			    <td>{{$value->payment_date}}</td>
			    <td>{{$value->amount}}</td>
			</tr>
			@endforeach	
		 

		</table>
		
<p>Total amount paid is: {{$sum}}</p>
	</div>
</center>
</body>
</html>