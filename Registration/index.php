<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="./style.css" type="text/css">
</head>
<body>
<div class="main">
<div class="registration">
	<h2>Register Here</h2>
	<form id="register" method="post">
	<label>First Name : </label>
	<br>
	<input type="text" name="fname" id="name" placeholder="Enter your first name">
	<br><br>
	<label>Last Name : </label>
	<br>
	<input type="text" name="lname" id="name" placeholder="Enter your last name">
	<br><br>
	<label>Your Age : </label>
	<br>
	<input type="number" name="age" id="name" placeholder="How old are you?">
	<br><br>
	<label>Email : </label>
	<br>
	<input type="Email" name="email" id="name" placeholder="Enter your valid email">
	<br><br>
	<label>Gender : </label>
	<br>
	&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" id="male">
	&nbsp;
	<span id="male">Male</span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" id="female">
	&nbsp;
	<span id="female">Female</span>
	<br><br>
	<label>Known Language : </label>
	<br>
	&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="lang" id="eng">
	&nbsp;
	<span id="eng">English</span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="lang" id="hindi">
	&nbsp;
	<span id="hindi">Hindi</span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="lang" id="assamese">
	&nbsp;
	<span id="assamese">Assamese</span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="lang" id="bengali">
	&nbsp;
	<span id="assamese">Bengali</span>
	<br><br>
	<input type="submit" value="Submit" name="submit" id="submit">
	</form>
</div>
</div>
</body>
</html>