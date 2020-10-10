<?php

namespace App\Http\Controllers;

use App\Message;
use App\user;
use Auth;
use App\Replaymessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::find(Auth::id());
         $messages=Message::all();
        return view('admin.school.message',compact('user','messages'));
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
     protected function validatorReplay(array $data)
    {
        return Validator::make($data, [
            'subject'        => ['required', 'string', 'max:255'],
            'message'        => ['required', 'string', 'max:255'],
            
        ]);
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
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
            $user = User::find(Auth::id());
            $school=Message::where('id',$message->id)->with('school')->first();
            $replays=Replaymessage::where('message_id',$message->id)->get();
            // return $replays;
        return view('admin.school.messageShow',compact('user','message','school','replays'));
    }

    public function replay(Message $message,Request $request)
    {
         $this->validatorReplay($request->all())->validate();
         Replaymessage::create([
          'subject' => $request['subject'],
          'meassge' => $request['message'],
          'school_id' => $message->school_id,
          'message_id' =>$message->id,
      ]);
        return redirect('/school/message/show/'.$message->id)->with('success','Replay Send Successfully');
    }


    public function deleteReplay(Replaymessage $message)
    {
        $message->delete();
        return back()->with('success','Replay Deleted Success');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
