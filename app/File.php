<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
		'file_path',
		'school_id',
		'school_grade_subject_id',
        'subject_id',
        'drive_url'
    ];
    
    public function school()    
    {   
        return $this->belongsTo('App\School','school_id');
    }

    public function Schoolgradesubject()  
    {   
        return $this->belongsTo('App\Schoolgradesubject','school_grade_subject_id');
    }

    public function subject()    
    {   
        return $this->belongsTo('App\Subject','subject_id');
    }
}
