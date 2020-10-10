<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolcity extends Model
{
     protected $fillable = [
		'city-name',
		'school_id',
		'city_id'
    ];

    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }

    public function city()    
    {   
        return $this->belongsTo('App\City','city_id');
    }
}
