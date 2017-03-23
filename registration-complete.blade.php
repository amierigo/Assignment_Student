<!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Complete</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstap.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstap-theme.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstap-theme.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 	<style type="text/css">
 		#content {
 			background-color: #00ff7f;
 			width: 50%;
 			height: 60%;
 			margin-left: 400px;
 			margin-top: 100px;
 			padding-left: 40px;
 			padding-top: 20px;
 			border-radius: 20px;
 			position: absolute;
 			font-size: 20px;
 		}
 		.footer {
		text-align: center;
	}

 	</style>

 </head>

 <body>
 	<div id="content">
 	<h2>Registration Complete</h2><hr>
 	<div class="container">
 		Student ID : &nbsp; <?php echo $student_id ?><br>
 		Name: &nbsp; <?php echo $first_name." ".$last_name ?><br>
 		Program: &nbsp; <?php echo $program ?><br>
 		Address: &nbsp; <?php echo $address ?><br>
 		Guardian Name: &nbsp; <?php echo $guardian_name ?><br>
 		Guardian Contact: &nbsp; <?php echo $guardian_contact ?><br>
 	</div>
 	
 	<form method="POST" action="/add-student">
 	{{ csrf_field() }}
 		<br>
 		<button class="btn btn-primary" id="btn2" type="submit" style="position: absolute; left: 200px;">Add Student</button>
 	</form>
 	<form method="POST" action="/show-student">
 	{{ csrf_field() }}
 		<button class="btn btn-default" id="btn2" type="submit" style="position:absolute; left: 400px;">Show Students</button>
 	</form>
 	</div>
 	<div class="footer" style="padding-top: 630px;">
            <p class="m-0 text-center text-white" style="position: absolute; background-color: #40e0d0; font-size: 25px; padding-top: 10px; width: 100%">Copyright &copy; La Verdad Christian College <i>Bachelor of Science in Information Systems</i> S.Y 2017</p>
        </div>
 </body>
 </html> 	
