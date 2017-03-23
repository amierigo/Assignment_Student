<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div id="space" style="background-color:#b0e0e6;padding-left: 50px; padding-right: 50px;">
<h2 class="one" style="font-size: 2em; font-family: rockwell; padding-top: 20px;">List of Students</h2>
	<table class="table table-striped table-bordered table-hover" border="5px;" style="background-color: #00bfff;">
		<thead>
			<th>Student ID &nbsp; </th>
			<th>Name</th>
			<th>Program</th>
			<th>Address</th>
			<th>Guardian Name</th>
			<th>Guardian Contact</th>
			
		</thead>

		<tbody>
			@foreach ($users as $student)
				<tr>
					<td> <?php echo $student->student_id ?> </td>
					<td> <?php echo $student->last_name?> </td>
					<td> <?php echo $student->program ?> </td>
					<td> <?php echo $student->address ?></td>
					<td> <?php echo $student->guardian_name ?></td>
					<td> <?php echo $student->guardian_contact ?></td>
					
					<td width="6%"> 
						<form method="POST" action="/update">
						{{ csrf_field() }} 
							<input type="hidden" name="id" value="{{$student->id}}">
							<input type="hidden" name="studentid" value="{{$student->student_id}}">
							<input type="hidden" name="firstname" value="{{$student->first_name}}">
							<input type="hidden" name="middlename" value="{{$student->middle_name}}">
							<input type="hidden" name="lastname" value="{{$student->last_name}}">
							<input type="hidden" name="program" value="{{$student->program}}">
							<input type="hidden" name="address" value="{{$student->address}}"> 
							<input type="hidden" name="guardianname" value="{{$student->guardian_name}}">
							<input type="hidden" name="guardiancontact" value="{{$student->guardian_contact}}"> 
							<button class="btn btn-warning">Edit</button>
						</form> 
					</td>
					
					<td width="6%">
						<form method="POST" action="/delete/{{$student->id}}">
						{{ csrf_field() }}	
							<input type="hidden" name="id" value="{{$student->id}}">
							<input type="hidden" name="firstname" value="{{$student->first_name}}">
							<input type="hidden" name="middlename" value="{{$student->middle_name}}">
							<input type="hidden" name="lastname" value="{{$student->last_name}}">
							<input type="hidden" name="program" value="{{$student->program}}">
							<input type="hidden" name="address" value="{{$student->address}}"> 
							<input type="hidden" name="guardianname" value="{{$student->guardian_name}}">
							<input type="hidden" name="guardiancontact" value="{{$student->guardian_contact}}"> 
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
		<form method="POST" action="/add-student">
		{{ csrf_field() }}
		<button class="btn" type="submit">Add Student</button></form><br><br>
</body>
</html>