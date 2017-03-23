<?php
/*Route::get('/', function () {
    return view('welcome');
});

*/
/*
Route::get('/', 'myController@showHomePage');
Route::get('/greet/{name}', 'myController@greetUser');
Route::get('/registration-form', 'formController@showRegistration');
Route::post('/process-registration', 'formController@studentRegistration');

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/' , 'StudentFormController@showRegistration');
Route::get('/' , 'StudentFormController@Registration');
Route::get('/' , 'ControllerForm@controllerForm');
Route::get('/registration-form', 'formController@showRegistration');
Route::post('/process-registration', 'formController@studentRegistration');
*/

//Student Registration Form

Route::get('/', 'HomeController@index');
Route::get('/home', 'StudentsController@ShowRegistration');
Route::get('/program', 'HomeController@program');
Route::get('/events', 'HomeController@events');
Route::get('/about', 'HomeController@about');
Route::get('/ListStudent' , 'StudentsController@ListStudent');

Route::get('/home', 'StudentsController@ShowRegistration');
Route::post('/stud-registration' , 'StudentsController@ProcessRegistration');
Route::post('/registration-complete', 'DoneRegistrationController@DoneRegistration');
Route::post('/add-student', 'StudentsController@ShowRegistration');
Route::post('/show-student', 'StudentsController@ListStudent');
Route::get('/show-students', 'StudentsController@ListStudent');
Route::post('/edit/{id}', 'StudentsController@ShowEdit');
Route::post('/update', 'StudentsController@Update');
Route::post('/delete/{id}', 'StudentsController@Delete');
Route::auth();

Auth::routes();