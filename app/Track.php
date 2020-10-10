<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
		'track_name',
		'track',
		'school_id'
    ];

    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }

    public function schooltrack()
	{
		return $this->hasMany('App\Schoolrack');
	} 
}
