<?php

namespace App\Http\Controllers;

use App\School;
use App\Track;
use App\City;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\EmailController;

class SchoolController extends Controller
{
     protected $EmailController;
       public function __construct(EmailController $EmailController)
    {
        $this->EmailController = $EmailController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::find(Auth::id());
        $schools=School::all();

        return view ('admin.school.index',compact('schools','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = User::find(Auth::id());
        $tracks = Track::all();
        $cities = City::all();
        return view('admin.school.create',compact('tracks','cities','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
    return Validator::make($data, [
            'manager_name'           => ['required', 'string', 'max:255'],
            'manager_email'          => ['required', 'string', 'max:255'],
            'manager_phone'          => ['required', 'string', 'max:255'],
            'school_name'            => ['required', 'string', 'max:255'],
            'school_open_year'       => ['required', 'string', 'max:255'],
            'school_phone'           => ['required', 'string', 'max:255'],
            'school_email'           => ['required', 'string', 'max:255'],
            'school_track'           => ['required', 'string', 'max:255'],
            'school_country'         => ['required', 'string', 'max:255'],
            'school_city'            => ['required', 'string', 'max:255'],
            'school_description'     => ['required', 'string', 'max:255'],

        ]);
    }
    public function store(Request $request)
    {
       $schoolNmae= $request['school_name'];
       $fileNameLogo="";
       $fileNameCover="";
        $this->validator($request->all())->validate();
         if($request['school_logo']) {
             $fileNameLogo = time().'_'.$request['school_logo']->getClientOriginalName();
             $filePath = $request->file('school_logo')->storeAs('uploads', $fileNameLogo, 'public');
             $destinationPath = public_path().'/assets/'.$schoolNmae.'/logo/';
             $uploadSuccess = $request['school_logo']->move($destinationPath, $fileNameLogo);
         }
         if($request['school_cover']) {
             $fileNameCover = time().'_'.$request['school_cover']->getClientOriginalName();
             $filePath = $request->file('school_cover')->storeAs('uploads', $fileNameCover, 'public');
             $destinationPath = public_path().'/assets/'.$schoolNmae.'/logo/';
             $uploadSuccess = $request['school_cover']->move($destinationPath, $fileNameCover);
         }
        $key = mt_rand(100000, 999999);
        $username = $request['school_name'].'@'.$request['school_phone'];
        $password = '@'.$request['school_phone'];
        $user = new User;
        $user->name=$username;
        $user->password=Hash::make($password);
        $user->role="school";
        $user->verficationkey=$key;
        $user->email= $request['school_email'];
        $user->save();

         School::create([
            "manager_name"  => $request['manager_name'],
            "manager_email"  => $request['manager_email'],
            "manager_phone"  => $request['manager_phone'],
            "school_name"  => $request['school_name'],
            "school_open_year"  =>date('Y-m-d', strtotime(trim(str_replace('/','-',$request['school_open_year'],)))),
            "school_phone"  => $request['school_phone'],
            "school_email"  => $request['school_email'],
            "school_website"  => $request['school_website'],
            "school_track"  => $request['school_track'],
            "school_country"  => $request['school_country'],
            "school_city"  => $request['school_city'],
            "user_id"  => $user->id,
            "school_description"  => $request['school_description'],
            "school_logo"  => '/assets/'.$schoolNmae.'/logo/'.$fileNameLogo,
            "school_cover"  => '/assets/'.$schoolNmae.'/logo/'.$fileNameCover,
         ]);

         
        $this->EmailController->sendEmailVerfication($request['school_email'],'verfication Acount Tahder',$key,$password);
        return redirect('/admin/school/index')->with('success','School Added Success');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
         $user = User::find(Auth::id());
        return view('admin.school.show',compact('school','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $tracks = Track::all();
        $cities = City::all();
         $user = User::find(Auth::id());
        return view('admin.school.edit',compact('school','tracks','cities','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $schoolNmae= $school->school_name;
        $fileNameLogo=$school->school_logo;
        $fileNameCover=$school->school_cover;
        $this->validator($request->all())->validate();
         if($request['school_logo']) {
             $fileNameLogo = time().'_'.$request['school_logo']->getClientOriginalName();
             $filePath = $request->file('school_logo')->storeAs('uploads', $fileNameLogo, 'public');
             $destinationPath = public_path().'/assets/'.$schoolNmae.'/logo/';
             $uploadSuccess = $request['school_logo']->move($destinationPath, $fileNameLogo);
             $fileNameLogo='/assets/'.$schoolNmae.'/logo/'.$fileNameLogo;
         }
         if($request['school_cover']) {
             $fileNameCover = time().'_'.$request['school_cover']->getClientOriginalName();
             $filePath = $request->file('school_cover')->storeAs('uploads', $fileNameCover, 'public');
             $destinationPath = public_path().'/assets/'.$schoolNmae.'/logo/';
             $uploadSuccess = $request['school_cover']->move($destinationPath, $fileNameCover);
             $fileNameCover= '/assets/'.$schoolNmae.'/logo/'.$fileNameCover;
         }
         $oldManagerEmail=$school->manager_email;
         $oldSchoolEmail=$school->school_email;
// return $request['manager_email'];
         $school->update([
            "manager_name"  => $request['manager_name'],
            "manager_email"  => $request['manager_email'],
            "manager_phone"  => $request['manager_phone'],
            "school_name"  => $request['school_name'],
            "school_open_year"  =>date('Y-m-d', strtotime(trim(str_replace('/','-',$request['school_open_year'],)))),
            "school_phone"  => $request['school_phone'],
            "school_email"  => $request['school_email'],
            "school_website"  => $request['school_website'],
            "school_track"  => $request['school_track'],
            "school_country"  => $request['school_country'],
            "school_city"  => $request['school_city'],
            "user_id"  => $school->user_id,
            "school_description"  => $request['school_description'],
            "school_logo"  => $fileNameLogo,
            "school_cover"  => $fileNameCover,
         ]);

         // return $oldManagerEmail;

          $this->EmailController->sendEmailEditSchoolByAdmin('Tahader School Edit Profile by Admin',$request['school_email'],$request['manager_email'],'oldManagerEmail','oldSchoolEmail');
        return redirect('/admin/school/index')->with('success','School Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }


    public function showGraed1()
    {
         $user = User::find(Auth::id());
        $schools=School::all();
        return view('admin.school.grade&subject.show',compact('schools','user'));
    }
}
