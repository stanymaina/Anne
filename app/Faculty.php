<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //Table Name 
    protected $table = 'faculties';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'faculty_name',
        'course_description', 
        'added_by',
        'updated_by',
    ];
}
