<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'requesting','capturing','what', 'who','where', 'special_need','notes','global','photo','video','audio','knowledge','pro','commercial','used_for','proposed_price','currency','amount','start_date','end_date','status',
    ];
}
