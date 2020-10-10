<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolgrade extends Model
{
    public function school()	
    {	
    	return $this->belongsTo('App\School','school_id');
    }

    public function grade()	
    {	
    	return $this->belongsTo('App\grade','grade_id');
    }
}
