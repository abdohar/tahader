<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schooltrack extends Model
{
    protected $fillable = [
		'track_name',
		'school_id',
		'track_id'
    ];

    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }


    public function track()    
    {   
        return $this->belongsTo('App\Track','track_id');
    }
}
