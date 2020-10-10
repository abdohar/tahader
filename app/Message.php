<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $fillable = [
		
		'subject',
		'meassge',
		'school_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\School','school_id');
    }
}
