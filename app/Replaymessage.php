<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replaymessage extends Model
{
    protected $fillable = [
		'subject',
		'meassge',
		'school_id',
		'message_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\School','school_id');
    }
}
