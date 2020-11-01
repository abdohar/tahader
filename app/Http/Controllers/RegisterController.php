<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;	
use App\Admin;
use App\Http\Controllers\EmailController;

class RegisterController extends Controller
{
    protected $EmailController;
    public function __construct(EmailController $EmailController)
    {
        $this->EmailController = $EmailController;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username'     => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'max:255'],
            'password'     => ['required', 'integer', 'min:4']
        ]);
    }

    public function create()
    {
        return view('register');
    }


    public function store(Request $request)
    {

        if(User::where('email',$request['email'])->first())
        {
            return back()->with('alert','the email is exist');
        }
        $this->validator($request->all())->validate();
        $key = mt_rand(100000, 999999);
        $password = $request['password'];
        $user= new User;
        $user['name']      = $request['username'];
        $user['email']     = $request['email'];
        $user['role']      = 'admin';
        $user['verficationkey'] = $key;
        $user['password']  = Hash::make($request['password']);
        $user->save();

        Admin::create([
            'admin_name'     => $request['username'],
            'admin_phone'    => '0992884727',
             'admin_email'   => $request['email'],
             'user_id' => $user->id,
        ]);
 $this->EmailController->sendEmailVerfication($request['email'],'verfication Acount Tahder',$key,$password);
        return redirect('/admin/login');
    }


}
