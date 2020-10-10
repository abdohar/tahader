<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachersubject extends Model
{

	  protected $fillable = [
      	'teacher_id',
		'grade_id',
		'subject_id',
        'school_id',
		'grade_name'
    ];


     public function teacher()	
    {	
    	return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function grade()	
    {	
    	return $this->belongsTo('App\Grade','grade_id');
    }

    public function subject()	
    {	
    	return $this->belongsTo('App\Subject','subject_id');
    }

     public function school() 
    {   
        return $this->belongsTo('App\School','school_id');
    }
}
