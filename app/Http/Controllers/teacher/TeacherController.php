<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Teacher;
use App\Teachergrade;
use App\Teachersubject;
use App\School;
use App\Grade;
use App\Subject;
use App\File;

class TeacherController extends Controller
{
    public function index()
    {
    	  $user = User::find(Auth::id());
           $teacher=Teacher::where('user_id',$user->id)->with('teachergrade')->first();
          $grades =Teachergrade::where('teachergrades.school_id','=',$teacher->school_id)->where('teachergrades.teacher_id',$teacher->id)->count();
          $subjects =Teachersubject::where('teachersubjects.school_id','=',$teacher->school_id)->where('teachersubjects.teacher_id',$teacher->id)->count();
          // return $grades;
    	return view('teacher.teacher.index',compact('user','grades','subjects'));
    }

    public function gradeShowe()
    {
    	 $user = User::find(Auth::id());
    	 $teacher=Teacher::where('user_id',$user->id)->with('teachergrade')->first();
    	 $school_id=$teacher->school_id;
    	 $teachergrades =Teachergrade::where('teachergrades.school_id','=',$teacher->school_id)->where('teachergrades.teacher_id',$teacher->id)
                ->join('grades', 'grades.id', '=', 'teachergrades.grade_id')
                ->select('grades.name as name','grades.note as note','grades.id as id')
                ->get();
    	 return view('teacher.teacher.grade',compact('teachergrades','user','school_id'));
    }

    public function subjectShow(School $school,Grade $grade)
    {
        $user = User::find(Auth::id());
        $subjects=Subject::where('school_id',$school->id)->where('grade_id',$grade->id)->get();
        return view('teacher.teacher.subject',compact('subjects','school','grade','user'));
    }

    public function showSubjectFile(School $school, Grade $grade, Subject $subject)
    {
        $user = User::find(Auth::id());
        $files=File::where('subject_id',$subject->id)->where('school_id',$school->id)->get();

         $teachersubjects =Teachersubject::where('teachersubjects.school_id','=',$school->id)->where('teachersubjects.grade_id',$grade->id)->where('teachersubjects.subject_id',$subject->id)
                ->join('teachers', 'teachers.id', '=', 'teachersubjects.teacher_id')
                ->select('teachers.firstname as firstname','teachers.lastname as lastname','teachers.id as id')
                ->get();

        return view('teacher.teacher.subjectThader',compact('files','subject','grade','school','user','teachersubjects'));
    }

    public function subjectTeacherShow()
    {
         $user = User::find(Auth::id());
         $teacher=Teacher::where('user_id',$user->id)->with('school')->first();
         
        $teachersubjects =Teachersubject::where('teachersubjects.school_id','=',$teacher->school_id)->where('teachersubjects.teacher_id',$teacher->id)
                ->join('subjects', 'subjects.id', '=', 'teachersubjects.subject_id')
                ->select('subjects.name as name','subjects.note as note','subjects.id as id','teachersubjects.grade_name as grade_name','teachersubjects.grade_id as grade_id','teachersubjects.school_id as school_id')
                ->get();
                // return $teachersubjects;
        return view('teacher.teacher.subjectTeacher',compact('user','teachersubjects','teacher'));
    }
}
