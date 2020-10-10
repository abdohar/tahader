<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name',
		'note',
		'school_id'
    ];

    public function school()	
    {	
    	return $this->belongsTo('App\School','school_id');
    }

     public function schoolgradesubject()
    {
        return $this->hasMany('App\Schoolgradesubject');
    }

    public function schoolgradesubjectteacher()
    {
        return $this->hasMany('App\Schoolgradesubjectteacher');
    }

    public function schoolgrade()
    {
        return $this->hasMany('App\Schoolgrade');
    } 
    
}
