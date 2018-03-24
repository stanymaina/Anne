<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTT extends Model
{
    //Table Name 
    protected $table = 'detail_t_ts';

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
