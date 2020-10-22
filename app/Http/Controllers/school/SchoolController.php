<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\School;
use Auth;
use App\Grade;
use App\Subject;
use App\Schoolgrade;
use App\Teacher;
use App\File;
use App\Track;
use App\City;
use App\Message;
use App\Teachergrade;
use App\Teachersubject;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

       protected function validator(array $data)
    {
    return Validator::make($data, [
            'first_name'           => ['required', 'string', 'max:255'],
            'last_name'          => ['required', 'string', 'max:255'],
            'father_name'          => ['required', 'string', 'max:255'],
            'sertificate'          => ['required', 'string', 'max:255'],
            'teacher_email'            => ['required', 'string', 'max:255'],
            'teacher_phone'       => ['required', 'string', 'max:255'],
        ]);
    }

    protected function validatorUpdateProf(array $data)
    {
    return Validator::make($data, [
            'manager_name'           => ['required', 'string', 'max:255'],
            // 'manager_email'          => ['required', 'string', 'max:255'],
            'manager_phone'          => ['required', 'string', 'max:255'],
            'school_name'            => ['required', 'string', 'max:255'],
            'school_open_year'       => ['required', 'string', 'max:255'],
            'school_phone'           => ['required', 'string', 'max:255'],
            // 'school_email'           => ['required', 'string', 'max:255'],
            'school_track'           => ['required', 'string', 'max:255'],
            'school_country'         => ['required', 'string', 'max:255'],
            'school_city'            => ['required', 'string', 'max:255'],
            'school_description'     => ['required', 'string', 'max:255'],

        ]);
    }

    public function index()
    {
      $user = User::find(Auth::id());
      $school=School::where('user_id',$user->id)->first();
      $teachers=Teacher::where('school_id',$school->id)->count();
      $grades=Schoolgrade::where('school_id',$school->id)->count();
      $subjects=Subject::where('school_id',$school->id)->count();
      return view('school.school.index',compact('user','subjects','grades','teachers'));
    }

    public function profile()
    {
        $user = User::find(Auth::id());
          $tracks = Track::all();
        $cities = City::all();
        $school=School::where('user_id',$user->id)->first();
        return view('school.school.profile',compact('school','user','tracks','cities'));
    }
    public function profileEdit(School $school)
    {
        $user = User::find(Auth::id());
        $tracks = Track::all();
        $cities = City::all();
        return view('school.school.profileEdit',compact('school','user','tracks','cities'));
    }

    public function profileUpdate(Request $request, School $school)
    {
        $school_email=$school->school_email;
        $manager_email=$school->manager_email;
        // return $school_email;s
        $schoolNmae= $school->school_name;
        $fileNameLogo=$school->school_logo;
        $fileNameCover=$school->school_cover;
        // return $manager_email;
        $this->validatorUpdateProf($request->all())->validate();
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

         $school->update([
            "manager_name"  => $request['manager_name'],
            "manager_email"  => $manager_email,
            "manager_phone"  => $request['manager_phone'],
            "school_name"  => $request['school_name'],
            "school_open_year"  =>date('Y-m-d', strtotime(trim(str_replace('/','-',$request['school_open_year'],)))),
            "school_phone"  => $request['school_phone'],
            "school_email"  => $school_email,
            "school_website"  => $request['school_website'],
            "school_track"  => $request['school_track'],
            "school_country"  => $request['school_country'],
            "school_city"  => $request['school_city'],
            "user_id"  => $school->user_id,
            "school_description"  => $request['school_description'],
            "school_logo"  => $fileNameLogo,
            "school_cover"  => $fileNameCover,
         ]);

          $this->EmailController->sendEmailEditSchoolProfile($manager_email,'Edit School Acount Tahder');


        return redirect('/school/profile')->with('success','Profile School Update Success');
    }


    public function profileEditEmailPassword(School $school)
    {
        $user = User::find(Auth::id());
        return view('school.school.profileEditEmailPassword',compact('school','user'));
       
    }

    public function profileUpdateEmailPassword(School $school, Request $request)
    {
          $user = User::find(Auth::id());
          $key = mt_rand(100000, 999999);
          $manager_email=$school->manager_email;
          $school_email=$school->school_email;
        if(Hash::check($request['old_password'], $user->password)){
                $user->password=Hash::make($request['new_password']);
                $user->isblock=1;
                $user->verficationkey=$key;
                $user->save();
                $this->EmailController->sendEmailEditEmailPassword($manager_email,$school_email,'Edit Password Acount Tahder',$request['new_password'],$key);
                 // $this->EmailController->sendEmailEditEmailPassword($school_email,$manager_email,'Edit Password Acount Tahder',$request['new_password'],$key);
                 return redirect('/verfication/'.$user->id);
        }
        return back()->with('alert','The Old Password is Error');
;
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

    public function showGrade()
    {
           // return "ds";
      $user = User::find(Auth::id());
      $school=School::where('user_id',$user->id)->first();
      $schoolgrades=Schoolgrade::where('school_id',$school->id)->with('grade')->get();
      // return $schoolgrades;

      return view('school.school.grade',compact('user','schoolgrades','school'));
    }

    public function showSubject(School $school, Grade $grade)
    {
         $user = User::find(Auth::id());
        $subjects=Subject::where('school_id',$school->id)->where('grade_id',$grade->id)->get();

// return $school->id;
        $teachergrades =Teachergrade::where('teachergrades.school_id','=',$school->id)->where('teachergrades.grade_id',$grade->id)
                ->join('teachers', 'teachers.id', '=', 'teachergrades.teacher_id')
                ->select('teachers.firstname as firstname','teachers.lastname as lastname','teachers.id as id')
                ->get();

        return view('school.school.subject',compact('subjects','school','grade','user','teachergrades'));
    }

    public function delTeacherGrade(School $school, Grade $grade,Teacher $teacher)
    {
        $teachergrades =Teachergrade::where('school_id','=',$school->id)->where('grade_id',$grade->id)->where('teacher_id',$teacher->id)->first();
        // return $teachergrades;
        $teachergrades->delete();
        return back()->with('success','Teacher Denided Success');

    }

    public function showSubjectFile(School $school, Grade $grade, Subject $subject)
    {
        $user = User::find(Auth::id());
        $files=File::where('subject_id',$subject->id)->where('school_id',$school->id)->get();

         $teachersubjects =Teachersubject::where('teachersubjects.school_id','=',$school->id)->where('teachersubjects.grade_id',$grade->id)->where('teachersubjects.subject_id',$subject->id)
                ->join('teachers', 'teachers.id', '=', 'teachersubjects.teacher_id')
                ->select('teachers.firstname as firstname','teachers.lastname as lastname','teachers.id as id')
                ->get();

        return view('school.school.subjectThader',compact('files','subject','grade','school','user','teachersubjects'));
    }

    public function addTeacher()
    {
        $user = User::find(Auth::id());
        return view('school.school.addTeacher',compact('user'));
    }



    public function storeTeacher(Request $request)
    {
        // return $request['sertificate'];
        if(User::where('email',$request['teacher_email'])->first())
        {
            return back()->with('alert','The Email is Exist,Enter another Email');
        }
        if(Teacher::where('phone',$request['teacher_phone'])->first())
        {
            return back()->with('alert','The Phone is Exist,Enter another Phone');
        }
         $key = mt_rand(100000, 999999);

        $user = User::find(Auth::id());
        $school=School::where('user_id',$user->id)->first();
         $this->validator($request->all())->validate();
        $username = $request['first_name'].'@'.$request['teacher_phone'];
        $password = '@'.$request['teacher_phone'];
        $user = new User;
        $user->name=$username;
        $user->password=Hash::make($password);
        $user->role="teacher";
        $user->verficationkey=$key;
        $user->email= $request['teacher_email'];
        $user->save();
// return $request['sertificate'];

        Teacher::create([
            "firstname"  => $request['first_name'],
            "fathername"  => $request['father_name'],
            "lastname"  => $request['last_name'],
            "phone"  => $request['teacher_phone'],
            "sertificate" => $request['sertificate'],
            "school_id"  => $school->id,
            "user_id"  => $user->id,
         ]);
         $this->EmailController->sendEmailVerfication($request['teacher_email'],'verfication Acount Tahder',$key,$password);
        return redirect('/school/admin')->with('success','Teacher Added Success');
    }

    public function editTeacher(Teacher $teacher)
    {
       $user = User::find(Auth::id());
       $teacher=Teacher::where('id',$teacher->id)->with('user')->first();
      return view('school.school.editTeacher',compact('teacher','user'));
    }

    public function updateTeacher(Request $request,Teacher $teacher)
    {
       $this->validator($request->all())->validate();
       $user = User::find(Auth::id());
       $teacher=Teacher::where('id',$teacher->id)->with('user')->first();
       $lastEmail=$teacher->user->email;
       $teacher->user->email=$request['teacher_email'];
       $teacher->user->save();
       $this->EmailController->sendEmailUpdateTeacher($request['teacher_email'],'Tahader Update Acount',$lastEmail);
       $teacher->update([
            "firstname"  => $request['first_name'],
            "fathername"  => $request['father_name'],
            "lastname"  => $request['last_name'],
            "phone"  => $request['teacher_phone'],
            "sertificate" => $request['sertificate'],
            "school_id"  => $teacher->school_id,
            "user_id"  => $teacher->user_id,
         ]);
      return redirect('/school/show/teacher')->with('success','Teacher Updated Success');
    }

     public function addTeacherGrade(School $school,Grade $grade)
    {
         $user = User::find(Auth::id());
        $teachers=Teacher::where('school_id',$school->id)->get();
        // return $te
        return view('school.school.addTeacherToGrade',compact('school','grade','user','teachers'));
    }

    public function storeTeacherGrade(Request $request, School $school,Grade $grade)
    {
         $teacher = Teacher::where('id',$request['teacher_id'])->first();
        $teachergrade=Teachergrade::where('teacher_id',$request['teacher_id'])->where('grade_id',$grade->id)->where('school_id',$school->id)->first();
        if($teachergrade){
        return back()->with('alert','Teacher '.$teacher->firstname.' '.$teacher->lastname.' Was Add  Recantly To Grade '.$grade->name);
        }else{
        Teachergrade::create([
            'grade_id' => $grade->id,
            'teacher_id' => $request['teacher_id'],
            'school_id' => $school->id
        ]);
    }
        return back()->with('success','Teacher '.$teacher->firstname.' '.$teacher->lastname.' Added Success To Grade '.$grade->name);
    }

    public function addTeacherSubject(School $school,Grade $grade,Subject $subject)
    {
        $user = User::find(Auth::id());
        $teachers=Teacher::where('school_id',$school->id)->get();
        // return $te
        return view('school.school.addTeacherToSubject',compact('school','grade','user','teachers','subject'));
    }

    public function storeTeacherSubject(Request $request, School $school,Grade $grade,Subject $subject)
    {
        $teacher = Teacher::where('id',$request['teacher_id'])->first();
        $teachersubject=Teachersubject::where('teacher_id',$request['teacher_id'])->where('grade_id',$grade->id)->where('subject_id',$subject->id)->where('school_id',$school->id)->first();
        if($teachersubject){
        return back()->with('alert','Teacher '.$teacher->firstname.' '.$teacher->lastname.' Was Add  Recantly To  Grade '.$grade->name.'To Subject'.$subject->namespace);
        }else{
        Teachersubject::create([
            'grade_id' => $grade->id,
            'teacher_id' => $request['teacher_id'],
            'subject_id' => $subject->id,
            'grade_name' =>$grade->name,
            'school_id' => $school->id
        ]);
    }
        return back()->with('success','Teacher '.$teacher->firstname.' '.$teacher->lastname.' Added Success To Grade '.$grade->name.'To Subject'.$subject->namespace);
    }


        public function delTeacherSubject(School $school, Grade $grade,Teacher $teacher,Subject $subject)
    {
        $teachersubject =Teachersubject::where('school_id','=',$school->id)->where('grade_id',$grade->id)->where('teacher_id',$teacher->id)->where('subject_id',$subject->id)->first();
        // return $teachersubject;  
        $teachersubject->delete();
        return back()->with('success','Teacher Denided Success');

    }


    public function showTeacher()
    {
        $user = User::find(Auth::id());
        $school=School::where('user_id',$user->id)->first();
        $teachers=Teacher::where('school_id',$school->id)->with('user')->get();
        return view('school.school.teacher',compact('teachers','user'));
    }

    public function delteacher(Teacher $teacher)
    {
        $teacher=Teacher::where('id',$teacher->id)->first();
        $user=User::where('id',$teacher->user_id)->first();
        $teachergrades=Teachergrade::where('teacher_id',$teacher->id)->where('school_id',$teacher->school_id)->get();
        foreach ($teachergrades as $teachergrade) {
            $teachergrade->delete();
        }
        $teachersubjects=Teachersubject::where('teacher_id',$teacher->id)->where('school_id',$teacher->school_id)->get();
        foreach ($teachersubjects as $teachersubject) {
            $teachersubject->delete();
        }
        $user->delete();
        $teacher->delete();
        return back()->with('success','Teacher Deleted Success');
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
