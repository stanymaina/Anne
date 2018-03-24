<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamApplication extends Model
{
    //Table Name 
    protected $table = 'exam_applications';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'applicant_id',
        'application_type',
        'unit_id'
    ];
}
