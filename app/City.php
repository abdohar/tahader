<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
		'city_name',
		'city',
		'school_id'
    ];

    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }

    public function schoolcity()
	{
		return $this->hasMany('App\Schoolcity');
	} 
}
