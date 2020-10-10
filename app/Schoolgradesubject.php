<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolgradesubject extends Model
{
    protected $fillable = [
       'school_id',
	   'grade_id',
	   'subject_id'
    ]; 

    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }
    public function grade()    
    {   
        return $this->belongsTo('App\Grade','grade_id');
    }
    public function subject()    
    {   
        return $this->belongsTo('App\Subject','subject_id');
    }

    public function file()
    {
        return $this->hasMany('App\File');
    } 

}
