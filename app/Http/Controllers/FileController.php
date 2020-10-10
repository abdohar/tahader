<?php

namespace App\Http\Controllers;

use App\File;
use App\Subject;
use App\Grade;
use App\School;
use App\User; 
use Auth;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school,Grade $grade,Subject $subject)
    {
         $user = User::find(Auth::id());

        // return $subject;
        $files=File::where('subject_id',$subject->id)->get();
        // return $files;
        return view('admin.school.grade&subject.file',compact('files','subject','grade','school','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school,Grade $grade,Subject $subject)
    {
        // return ":s";
         $user = User::find(Auth::id());
        return view('admin.school.grade&subject.fileCreate',compact('school','grade','subject','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,School $school,Grade $grade,Subject $subject)
    {
         $user = User::find(Auth::id());
        File::create([
            'name' => $request['file_name'],
            'drive_url' => $request['drive_url'],
            'school_id' => $school->id,
            'subject_id' => $subject->id,
        ]);
         $files=File::where('subject_id',$subject)->get();
          return redirect('/admin/school/'.$school->id.'/grade/'.$grade->id.'/subject/'.$subject->id.'/file');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
