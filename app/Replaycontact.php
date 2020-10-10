<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replaycontact extends Model
{
    protected $fillable = [
		'subject',
		'meassge',
		'contact_id'
    ];

    public function contact()
    {
        return $this->belongsTo('App\Contact','contact_id');
    }
}
