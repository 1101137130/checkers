<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $fillable = [
        'itemname', 'rate','status'
    ];
    protected $dateFormat = 'U';

}
