<?php 

namespace App\Http\Controller;

use Illuminate\Http\Requests;
use App\Http\Requests;

class DoneRegistrationController extends Controller 
{
	public function DoneRegistration (Request $request)
	return view ('registration-complete');
}