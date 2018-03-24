<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //Table Name 
    protected $table = 'courses';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'course_name',
        'course_description', 
        'faculty_offering', 
        'added_by',
        'updated_by',
    ];
}
