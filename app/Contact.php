<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
      protected $fillable = [
		'sender_name',
		'sender_email',
		'sender_phone',
		'subject',
		'meassge',
    ];

    public function replay()
	{
		return $this->hasMany('App\Replaycontact');
	} 
}
