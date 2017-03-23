<!DOCTYPE html>
<html lang="eng-US">
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!--Header-->
	<div id="main">
	<div class="header">
	<img src="{{ URL::asset('img/LOGO.png') }}" width="90px" height="80">	
		<h3>La Verdad Christian College</h3>
	</div>
	

	<div class="container">
    		<h4>Student Information</h4> 
			    <form method="POST" action="/stud-registration">
				{{ csrf_field() }}
				<table>
				<tr>
				ID Number:		<input type="text" name="student_id" required><br><br>
				First Name: 	<input type="text" name="first_name" required><br><br>
				Middle Name: 	<input type="text" name="middle_name" ><br><br>
				Last Name: 		<input type="text" name="last_name" required><br><br>
				Program: 		<input type="text" name="program" required><br><br>
				Address: 		<input type="text" name="address" rows="3" cols="20" required></textarea><br><br>
				Guardian Name: <input type="text" name="guardian_name" required=""><br><br>
				Guardian Contact: <input type="text" name="guardian_contact" required><br><br>
				<center><button type="submit"><strong>Register</strong></button></center><br>
				</tr>
				</form></table>
    </div>	
	</div>
	
		<div class="footer">
			<br><p>Copyright &copy; Student of <b>BSIS </b><dfn>Bachelor of Science in Information System</dfn> of La Verdad Christian College S.Y 2017</p>
		</div>


</div>
</body>
</html>
