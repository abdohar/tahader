<?php

namespace App\Http\Controllers;

use App\Grade;
use App\School;
use App\Subject;
use App\Schoolgrade;
use App\User;
use Auth;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school)
    {
         $user = User::find(Auth::id());
        $grades=Grade::all();
        return view('admin.school.grade&subject.create',compact('school','grades','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$school)
    {
        // return $request;
         $user = User::find(Auth::id());
        for ($i=0; $i < $request->number_group; $i++) {
        
        $items = strval($i+1);
        
        $subject_name = $request['subject_name'.$items];
        $subject_note = 'this is subject '.$request['subject_name'.$items];
        $school_id = $school;
        $grade_id = $request['school_grade'.$items];
// return $grade_id;

        $grade =Schoolgrade::where('grade_id',$grade_id)->where('school_id',$school_id)->first();
        // return $grade;
        if(!$grade){
            // return "d";
            $newGrade=new Schoolgrade;
            $newGrade->school_id=$school;
            $newGrade->grade_id=$grade_id;
            $newGrade->save();
        }
        // }else if($grade && $grade->school_id!=$school){
        //     // return $grade_id;
        //     $newGrade=new Schoolgrade;
        //     $newGrade->school_id=$school;
        //     $newGrade->grade_id=$grade_id;
        //     $newGrade->save();
        // }

// return $grade;s
        $subject = new Subject;
        $subject->name = $subject_name;
        $subject->note = $subject_note  ;
        $subject->school_id = $school_id ;
        $subject->grade_id = $grade_id;
        $subject->save();
    }
       return redirect('admin/school/'.$school_id.'/grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    public function showGradeSchool(School $school)
    {
         $user = User::find(Auth::id());
        
        $schoolgrades=School::where('id',$school->id)->with('schoolgrade')->first();
// return $schoolgrades;
        $grades=array();
        foreach ($schoolgrades->schoolgrade as $schoolgrade) {
            $grade1=Grade::where('id',$schoolgrade->grade_id)->first();
            // return $grade1;
             array_push($grades,$grade1);    
        }
       
        
         return view('admin.school.grade&subject.showGrade',compact('grades','school','user'));
    }

    public function showGradeGet()
    {
         $user = User::find(Auth::id());
        $schools=School::all();
        return view('admin.school.grade&subject.show',compact('schools','user'));
    }

    public function showGradePost(Request $request)
    {
         $user = User::find(Auth::id());
        $schoolgrades=School::where('id',$request->school_id)->with('schoolgrade')->first();
        $school=School::where('id',$request->school_id)->first();
        $grades=array();
        foreach ($schoolgrades->schoolgrade as $schoolgrade) {
            $grade1=Grade::where('id',$schoolgrade->grade_id)->first();
             array_push($grades,$grade1);    
        }
         return view('admin.school.grade&subject.showGrade',compact('grades','school','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
