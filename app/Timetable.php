<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    //Table Name 
    protected $table = 'timetables';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'timetable_name',
        'course_id',
        'faculty',
        'date_from',
        'date_to',
        'added_by',
        'updated_by'
    ];
}
