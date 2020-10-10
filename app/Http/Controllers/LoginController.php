<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
class LoginController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email'        => ['required', 'string', 'max:255'],
            'password'     => ['required', 'integer', 'min:4']
        ]);
    }


	public function index()
	{
		
        if (Auth::check()){
            return back();
    	
    }else{
        return view('login');
    }
	}


	public function login(Request $request)
	{
		// return $request;
	    $email=$request['email'];
   	    $password=$request['password'];
    	if (Auth::attempt(['email' => $email, 'password' => $password])) {

    	$user = User::find(Auth::id());
     	$role=$user->role;
     	// return $role;
     	if($role=='admin'){
     	    return redirect('/'.$role);
     	}else if($role=='teacher'){ 
      	    return redirect('/'.$role);
     	}else{
    	    return redirect('/school');
     	   }
   	     }
    	 return redirect('/login');
		}


	public function logout(Request $request)
	{
    // return $request;
		Auth::logout();
		return redirect('/login');
	}

}
