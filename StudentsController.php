<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model;

class StudentsController extends Controller
{
    public function ShowRegistration(Request $request) {
    	return view('registration-form');
    }

    public function ProcessRegistration(Request $request) {
    	$student_id = $request->student_id;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $last_name = $request->last_name;
    	$program = $request->program;
    	$address = $request->address;
        $guardian_name = $request->guardian_name;
        $guardian_contact = $request->guardian_contact;

    	$student = new Student;
    	$student->student_id = $student_id;
        $student->first_name = $first_name;
    	$student->middle_name = $middle_name;
    	$student->last_name = $last_name;
        $student->program= $program;
        $student->address = $address;
        $student->guardian_name = $guardian_name;
        $student->guardian_contact = $guardian_contact;

    	$student->save();

    	return view('registration-complete', [
    		'student_id' => $student_id,
    		'first_name' => $first_name,
    		'middle_name' => $middle_name,
            'last_name' => $last_name,
            'program' => $program,
            'address' => $address,
            'guardian_name' => $guardian_name,
            'guardian_contact' => $guardian_contact
    		]);
    }

    public function ListStudent() {
        $users = Student::orderBy('id')->get();

        return view('show-students', [  
        'users' => $users]);
    }
    // public function Create(Request $request) {
    //     $Model = new Model;
    //     $Model -> student_id = $request -> update_student;
    //     $Model ->save();             

    //     return view('edit-student'); 
    // }

    public function Update(Request $request) {
        // DB::table('students')-> where('id', '=', $request -> id ) -> update([
        //     'student_id' => $request -> student_id,
        //     'first_name' => $request -> first_name,
        //     'middle_name' => $request -> middle_name,
        //     'last_name' => $request -> last_name,
        //     'program' => $request -> program, 
        //     'address' => $address -> address,
        //     'guardian_name' =>  guardian_name,
        //     'guardian_contact' => guardian_contact
        //     ]);
        return view('update', [
            'id' => $request ->id, 
            'student_id' => $request ->studentid,
            'first_name' => $request ->firstname,
            'middle_name' =>$request ->middlename,
            'last_name' => $request ->lastname,
            'program' => $request ->program,
            'address' => $request ->address,
            'guardian_name' => $request ->guardianname,
            'guardian_contact' => $request ->guardiancontact
            ]);
    } 

    public function ShowEdit(Request $request, $id) {
            $students = Student::find($id);
            $students ->first_name = $request->firstname;
            $students ->middle_name = $request->middlename;
            $students ->last_name = $request->lastname;
            $students ->program = $request->program;
            $students ->address = $request->address;
            $students ->guardian_name = $request->guardianname;
            $students ->guardian_contact = $request->guardiancontact;
            $students ->save();
            return redirect('/show-students');
        // $students = DB::table('students') -> get();
        // DB::table('students') -> where ('id', $request->id) ->update([
        //     'id' => $request ->id,
        //     'student_id' => $request ->studentid,
        //     'first_name' => $request ->firstname,
        //     'middle_name' =>$request ->middlename,
        //     'last_name' => $request ->lastname,
        //     'program' => $request ->program,
        //     'address' => $request ->address,
        //     'guardian_name' => $request ->guardianname,
        //     'guardian_contact' => $request ->guardiancontact
        //     ]);
        // return view('show-students' ,[
        //     'students' => $students]);
    }
    public function Delete(Request $request,$id)
    {
        // $student = DB::table('students')->get();
        // DB::table('students') -> where('id', '=', $request -> id  ) -> delete();
        // return view('show-students', ['students' => $students ]);
        $stud = Student::find ($id)->delete();
        return redirect('/show-students');
    }
}
