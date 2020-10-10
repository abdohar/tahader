<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Replaycontact;
use App\Replaymessage;
use App\Message;
use App\User;
use Auth;
use App\School;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\EmailController;

class ContactController extends Controller
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
        //
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'max:255'],
            'phone'        => ['required', 'string', 'max:255'],
            'subject'        => ['required', 'string', 'max:255'],
            'message'        => ['required', 'string', 'max:255'],
            
        ]);
    }

    protected function validatorReplay(array $data)
    {
        return Validator::make($data, [
            'subject'        => ['required', 'string', 'max:255'],
            'message'        => ['required', 'string', 'max:255'],
            
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        Contact::create([
        'sender_name' => $request['name'],
        'sender_email' => $request['email'],
        'sender_phone' => $request['phone'],
        'subject' => $request['subject'],
        'meassge' => $request['message'],
        ]);
        $this->EmailController->sendEmailContact($request['email'],'Tahader Contact Query',$request['subject'],$request['message'],$request['phone'],$request['email'],$request['name']);
        return back()->with('success','Thank you, the message was sent successfully, we will reply to you as soon as possible 😉.');
    }

    public function contactQueryReplay(Request $request,Contact $contact)
    {
        // return $request;
        $this->validatorReplay($request->all())->validate();
        Replaycontact::create([
            'subject' => $request['subject'],
            'meassge' => $request['message'],
            'contact_id' => $contact->id,
        ]);

        $this->EmailController->sendEmailContactReplay($contact->sender_email,'Tahader Contact Query Replay',$request['subject'],$request['message']);
        return redirect('/admin/contact/query/'.$contact->id)->with('success','Replay Send Successfully');
    }

     public function message()
    {
      $user = User::find(Auth::id());
      $school=School::where('user_id',$user->id)->first();
      $messages=Message::where('school_id',$school->id)->get();
      // return $messages;
      return view('school.school.message',compact('messages','user'));
    }

    public function messageSend()
    {
        $user = User::find(Auth::id());
      return view('school.school.messageSend',compact('user'));
    }

    public function messageStore(Request $request)
    {
        $user = User::find(Auth::id());
        $school=School::where('user_id',$user->id)->first();
        $this->validatorReplay($request->all())->validate();
        Message::create([
            'subject' => $request['subject'],
            'meassge' => $request['message'],
            'school_id' => $school->id,
        ]);
      return redirect('/school/message');
    }

    public function messageShow(Message $message)
    {
        $user = User::find(Auth::id());
                $replays=Replaymessage::where('message_id',$message->id)->get();
        return view('school.school.messageShow',compact('user','message','replays'));
    }

    public function contactQueryDelete(Replaycontact $replay)
    {
        $replay->delete();
        return back()->with('success','Replay Deleted Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
