<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailTimetable extends Model
{
    //Table Name 
    protected $table = 'timetable_details';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'timetable_id',
        'unit_name',
        'day',
        'time_start',
        'time_end',
        'lectured_by',
        'added_by',
        'updated_by'
    ];
}
