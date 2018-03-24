<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardApplication extends Model
{
    //Table Name 
    protected $table = 'card_applications';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'applicant_id',
        'application_type',
        'faculty_id',
        'status_from',
        'status_to'
    ];
}
