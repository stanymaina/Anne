<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Table Name 
    protected $table = 'messages';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'message_from',
        'message_to',
        'message_body',
        'message_read_status'
    ];
}

