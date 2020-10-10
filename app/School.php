<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
     protected $fillable = [
      	'manager_name',
		'manager_phone',
		'manager_email',
		'school_name',
		'school_description',
		'school_open_year',
		'school_phone',
		'school_website',
		'school_country',
		'school_city',
		'school_track',
		'school_email',
		'school_logo',
		'school_cover',
		'user_id'
    ];

	public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }


    public function subject()
    {
        return $this->hasMany('App\Subject');
    }

    public function grade()
	{
		return $this->hasMany('App\Grade');
	} 

	public function file()
	{
		return $this->hasMany('App\File');
	} 

	public function city()
	{
		return $this->hasMany('App\City');
	} 

	public function track()
	{
		return $this->hasMany('App\Track');
	} 

	public function message()
	{
		return $this->hasMany('App\Message');
	} 

	public function schooltrack()
	{
		return $this->hasMany('App\Schooltrack');
	} 


	public function schoolcity()
	{
		return $this->hasMany('App\Schoolcity');
	} 

	public function schoolgradesubject()
    {
        return $this->hasMany('App\Schoolgradesubject');
    }

    public function schoolgradesubjectteacher()
    {
        return $this->hasMany('App\Schoolgradesubjectteacher');
    }

    public function schoolGrade()
    {
        return $this->hasMany('App\Schoolgrade');
    }

    public function replay()
	{
		return $this->hasMany('App\Replaymessage');
	} 
}
