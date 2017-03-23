<!DOCTYPE html>
<html>
<head>
	<title>La Verdad Christian College</title>
	<link rel="stylesheet" type="text/css" href="css/bootstap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body> 
<div id="tab" style="position: absolute; left: 400px;">
<table>
<tr>
<td>
	<form method="POST" action= "/edit/{{$id}}">
	{{ csrf_field() }}
	<div class="one"><input type="hidden" name="id" value="{{$id}}"><br></div>
	<div class="one"><input type="number" name="studentid" value="{{$student_id}}"><br></div>
	<div class="one"><input type="text" name="firstname" value="{{$first_name}}"><br></div>
	<div class="one"><input type="text" name="middlename" value="{{$middle_name}}"><br></div>
	<div class="one"><input type="text" name="lastname" value="{{$last_name}}"><br></div>
	<div class="one"><input type="text" name="program" value="{{$program}}"><br></div>
	<div class="one"><input type="text" name="address" value="{{$address}}"> <br></div>
	<div class="one"><input type="text" name="guardianname" value="{{$guardian_name}}"><br></div>
	<div class="one"><input type="text" name="guardiancontact" value="{{$guardian_contact}}"><br></div>
	<div class="one"><button type="submit" class="btn btn-success">&nbsp; <strong class="a" style="font-size: 20px;"> Edit</strong></button>
</form>
</td>
</tr>
</table>
</div><div class="footer" style="padding-top: 570px;">
            <p class="m-0 text-center text-white" style="background-color: #40e0d0; font-size: 25px; padding-top: 10px;">Copyright &copy; La Verdad Christian College <i>Bachelor of Science in Information Systems</i> S.Y 2017</p>
        </div>

</body>
</html>

