<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    
    protected $fillable = [
        'user_id','what', 'who', 'special_need','notes','photo','video','audio','knowledge','currency','amount'
    ];

}
