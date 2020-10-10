<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\User;
use App\File;
use App\Subject;
use App\Schoolgrade;
use App\Teacher;
use Auth;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       protected $EmailController;
       public function __construct(EmailController $EmailController)
    {
        $this->EmailController = $EmailController;
    }

    public function index()
    {
        $schools=School::paginate(6);
        $school=School::count();
        $files=File::count();
        $grades=Schoolgrade::count();
        $subjects=Subject::count();
        $teachers=Teacher::count();
        // $file=File::count();
        return view('site.content',compact('schools','school','subjects','grades','files','teachers'));
    }

    public function aboutUs()
    {
     return view('site.aboutus');   
    }

    public function services()
    {
        return view('site.services');
    }

    public function contact()
    {
        return view('site.contact');
    }
    public function school()
    {
        $schools=School::all();
        return view('site.schools',compact('schools'));
    }
    public function schoolShow(School $school)
    {
        $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
        if($pageRefreshed == 1){
        }else{
           $school->show= ($school->show) + 1;
        $school->save();
        }
                // return $school->show;
        return view('site.schoolShow',compact('school'));
    }
    public function forgetPassword()
    {
        return view('site.forgetPassword');
    }

    public function forgetPasswordReset(Request $request)
    {
        $key = mt_rand(100000, 999999);
         $user = User::where('email',$request['email'])->first();
         // return User::where('email',$request['email'])->first();
         // return $request['email'];
        if(User::where('email',$request['email'])->first()){
            $email=$request['email'];
                $user->resetpassword=$key;
                $user->save();
             $this->EmailController->sendEmailForgetPassword($request['email'],'Tahader Reset Password',$key);
             return redirect('/reset/password/'.$user->id);
         
        }else{
            return back()->with('alert','The Email Not Exists');
        }
    }

public function resetPassword(User $user)
{
    // $user=User::where('id',$user->id)->get();s
    // $user=$user->id;
    // $email = $user->email;
    return view('site.resetPassword',compact('user'));
}

public function resetPasswordCode(Request $request,User $user)
{
   if($user->resetpassword == $request['code'])
   {
    $user = User::where('id',$user->id)->first();
          $key = mt_rand(100000, 999999);
          // $manager_email=$school->manager_email;
          // $school_email=$school->school_email;
        if($request['new_password']){
                $user->password=Hash::make($request['new_password']);
                $user->isblock=1;
                $user->verficationkey=$key;
                $user->save();
                $this->EmailController->sendEmailResetPasswordAndVerfication($request['email'],'Tahader Reset Password Acount Tahder',$key);
                 return redirect('/verfication/'.$user->id);
        }
        return back()->with('alert','The Old Password is Error');
;
   }
   return back();
}
    public function login()
    {
        if (Auth::check()){
            return back();
        
        }else{
         return view('site.login');
        }
    }
    public function loginUser(Request $request)
    {

        $email=$request['email'];
        $password=$request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $user = User::find(Auth::id());
        // return $user;
        if($user->isblock){
            // return $user->isblock;
            return redirect('/verfication/'.$user->id);
        }else{
        $role=$user->role;
        if($role=='admin'){
            return redirect('/'.$role);
        }else if($role=='teacher'){ 
            return redirect('/'.$role.'/admin');
        }else{
            return redirect('/'.$role.'/admin');
           }
         }
         return redirect('/login');
     }
     return redirect('/login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function verfication(User $user)
    {
        return view('verfication',compact('user'));
    }

    public function verficationCode(Request $request, User $user)
    {
        if($user->verficationkey == $request['key']){
            $role=$user->role;
            $user->isblock=0;
            $user->save();
            return redirect('/'.$role.'/admin')->with('success','Verficated Account Success');
        }else{
            return back()->with('alert','Code Not Match');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
