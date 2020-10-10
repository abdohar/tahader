<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class EmailController extends Controller
{
    // ------------- [ Send email ] --------------------
    public function sendEmailVerfication($reciver,$subject,$key,$password) {
        Mail::send('mail',compact('key','password','reciver'), function ($message) use ($reciver,$subject) {
    	$message->from('schooltahader@gmail.com', 'Tahader');

    	$message->to($reciver);
    	$message->subject($subject);
		});
    }
      public function sendEmailEditSchoolProfile($reciver,$subject) {
        Mail::send('mailEditSchoolProfile',compact('reciver'), function ($message) use ($reciver,$subject) {
        $message->from('schooltahader@gmail.com', 'Tahader');

        $message->to($reciver);
        $message->subject($subject);
        });
    }

    public function sendEmailEditEmailPassword($reciver,$email,$subject,$newpassword,$key)
    {
        $mails=[$reciver,$email];
         Mail::send('mailEditSchoolPassword',compact('reciver','key','newpassword','email'), function ($message) use ($reciver,$subject,$mails) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($mails);
        $message->subject($subject);
        });
    }

    public function sendEmailForgetPassword($reciver,$subject,$key)
    {
        // $mails=[$reciver,$email];s
         Mail::send('mailResetPassword',compact('reciver','key'), function ($message) use ($reciver,$subject) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($reciver);
        $message->subject($subject);
        });
    }

    public function sendEmailResetPasswordAndVerfication($reciver,$subject,$key)
    {
            Mail::send('mailResetPasswordAndVerfication',compact('reciver','key'), function ($message) use ($reciver,$subject) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($reciver);
        $message->subject($subject);
        });
    }

    public function sendEmailUpdateTeacher($reciver,$subject,$lastEmail)
    {
        if($reciver==$lastEmail){
            $emails=$reciver;
        }else{
        $emails=[$reciver,$lastEmail];
        }
         Mail::send('mailUpdateteacher',compact('reciver','subject','lastEmail'), function ($message) use ($subject,$emails) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($emails);
        $message->subject($subject);
        });
    }

    public function sendEmailContact($reciver,$subject,$yourSubject,$yourMessage,$yourPhone,$yourEmail,$yourName)
    {
         Mail::send('mailContactQueryVisitore',compact('reciver','yourSubject','yourMessage','yourPhone','yourEmail','yourName'), function ($message) use ($reciver,$subject) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($reciver);
        $message->subject($subject);
        });
    }

    public function sendEmailContactReplay($reciver,$subject,$yourSubject,$yourMessage)
    {
        Mail::send('mailContactQueryVisitoreReplay',compact('reciver','yourSubject','yourMessage'), function ($message) use ($reciver,$subject) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($reciver);
        $message->subject($subject);
        });
    }

    public function sendEmailEditSchoolByAdmin($subject,$school_email,$manager_email,$oldManagerEmail,$oldSchoolEmail)
    {
        if($school_email==$oldSchoolEmail && $manager_email==$oldManagerEmail){
            $emails=[$school_email,$manager_email];
        }else if($school_email!=$oldSchoolEmail && $manager_email!=$oldManagerEmail){
            $emails=[$school_email,$manager_email];
        }else if($school_email==$oldSchoolEmail && $manager_email!=$oldManagerEmail){
            $emails=[$school_email,$manager_email,$oldManagerEmail];
        }else if($school_email!=$oldSchoolEmail && $manager_email==$oldManagerEmail){
            $emails=[$school_email,$manager_email,$oldSchoolEmail];
        }
// return $emails;
         Mail::send('mailEditSchoolByAdmin',compact('school_email','manager_email','oldManagerEmail','oldSchoolEmail'), function ($message) use ($subject,$emails) {
        $message->from('schooltahader@gmail.com', 'Tahader');
        $message->to($emails);
        $message->subject($subject);
        });
    }

}






     // $to_email = $reciver;

        // Mail::to($to_email)->send(new MyEmail);

        // return "<p> Your E-mail has been sent successfully. </p>";
