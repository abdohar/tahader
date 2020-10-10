<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
		'note',
		'code',
		'school_id'
    ];


    public function school()	
    {	
    	return $this->belongsTo('App\School','school_id');
    }

      public function grade()  
    {   
        return $this->belongsTo('App\Grade','grade_id');
    }

    public function schoolgradesubject()
    {
        return $this->hasMany('App\Schoolgradesubject');
    }

    public function schoolgradesubjectteacher()
    {
        return $this->hasMany('App\Schoolgradesubjectteacher');
    }


    public function file()
    {
        return $this->hasMany('App\File');
    }
}
