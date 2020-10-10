<?php

namespace App\Http\Controllers;

use App\Admin;
use App\City;
use App\Track;
use App\Grade;
use App\User;
use App\Contact;
use App\School;
use App\Subject;
use App\File;
use Auth;
use App\Replaycontact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::find(Auth::id());
        // $school = School::where('user_id',$user->id)->first();

        $tracksCount = Track::count();
        if($tracksCount==0){
        $tracks = array('International', 'Public School' , 'Decisions');
        for ($i=0; $i < count($tracks) ; $i++) { 
            Track::create([
                'track' => $tracks[$i],
            ]);
        }

        $cities = array( 'Abhā','Abqaiq',  'Al-Baḥah',    'Al-Dammām',     'Al-Hufūf',    'Al-Jawf',   'Al-Kharj',    'Al-Khubar',     'Al-Qaṭīf',    'Al-Ṭaʾif',    'ʿArʿar',  'Buraydah',    'Dhahran',   'Ḥāʾil', 'Jiddah',  'Jīzān', 'Khamīs Mushayt',          'King Khalīd Military City',
                    'Mecca', 'Medina',  'Najrān',  'Ras Tanura',      'Riyadh',  'Sakākā',  'Tabūk', 'Yanbuʿ',);
          for ($i=0; $i < count($cities) ; $i++) { 
            City::create([
                'city' => $cities[$i],
            ]);
          }


          $grades = array('Kg1', 'Kg2' , 'Kg3' , 'Kg4' ,'First Grade ','Second Grade ','Third Grade ','Fourth Grade ','Fifth Grade ','VI Grade ','Seventh Grade ','VIII Grade ','Ninth Grade ','The tenth','Eleventh Grade ','Bachelor Grad ');
        for ($i=0; $i < count($grades) ; $i++) { 
            Grade::create([
                'name' => $grades[$i],
                'note' => 'this is '.$grades[$i]
            ]);
          }
        }
        $grades=Grade::count();
        $schools=School::count();
        $subjects=Subject::count();
        $files=File::count();
        return view('content',compact('user','grades','schools','subjects','files'));
    }

    public function contactQuery()
    {
        $user = User::find(Auth::id());
        $contacts=Contact::all();
        // return $contacts;
        return view('admin.contact',compact('user','contacts'));
    }

    public function contactQueryShow(Contact $contact)
    {
           $user = User::find(Auth::id());
           // return $contact;
           // $contact=Contact::where('id',$contact->id)->with('replay')->first();
           $replays=Replaycontact::where('contact_id',$contact->id)->get();
           // return $replays;
        return view('admin.contactShow',compact('contact','user','replays'));
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
