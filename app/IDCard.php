<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IDCard extends Model
{
    //Table Name 
    protected $table = 'i_d_cards';

    //Primary Key
    public $primarykey = 'id';

    //Timestamp    
    public  $timestamps = true;

    //Fillable Fields
    public $fillable = [
        'user_id',
        'card_no',
        'card_status',
        'added_by',
        'updated_by'
    ];
}
