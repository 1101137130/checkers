<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'username', 'user_id', 'item_id', 'status', 'bet_object', 'amount', 'item_rate'
    ];
    protected $dateFormat = 'U';

}
