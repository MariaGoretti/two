<!DOCTYPE html>
<html>
<style>
<head>
<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
</head>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=date], input[type=number], input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=date]:focus, input[type=email]:focus, input[type=number]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding-left: 16px;
    padding-right: 16px;
}

/* The Modal (background) */
.modal {
    display: visible; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: white;
}

/* Modal Content/Box */
.modal-content {
    background-color: white;
    margin: 1% auto 1% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 35%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 22px;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<div class="modal">
  <br><br>
  <form class="modal-content" action="/student" method="post">
    <div class="container">
      <center>
        <a href="/">Home</a>
      <p><strong><i><h1>Register</h1></i></strong>
      Fill in this form to register</p>
      </center>
      <hr>
      <label for="num"><b>Student Number:</b></label>
      <input type="number" id="num" min="0" placeholder="Enter student number" name="student_no" >

      <label for="name"><b>Full Name:</b></label>
      <input type="text" placeholder="Enter full name" name="full_name" >

      <label for="date"><b>Date Of Birth:</b></label>
      <input type="date" placeholder="Enter Date Of Birth" name="birth_date" >

      <label for="email"><b>Email Address:</b></label>
      <input type="email" placeholder="Enter Email Address" name="email_address" >

      <input type="hidden" name=_token value="{{csrf_token()}}">
      <div class="clearfix">

        <center><button type="submit" class="signupbtn">Register</button></center><br>
      </div>
    </div>
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
  </form>
</div>
</body>
</html>
