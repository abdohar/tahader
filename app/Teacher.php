<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
     protected $fillable = [
      	'firstname',
		'fathername',
		'lastname',
		'school_id',
    'phone',
    'sertificate',
		'user_id'
    ];

    public function school()	
    {	
    	return $this->belongsTo('App\School','school_id');
    }

    public function user()
  {
  	return $this->belongsTo('App\User','user_id');
  }

  public function schoolgradesubjectteacher()
    {
        return $this->hasMany('App\Schoolgradesubjectteacher');
    }

    public function teachergrade()
    {
        return $this->hasMany('App\Teachergrade');
    }

     public function teachersubject()
    {
        return $this->hasMany('App\Teachersubject');
    }
}
