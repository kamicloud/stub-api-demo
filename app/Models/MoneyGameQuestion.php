<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoneyGameQuestion extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'ip',
    ];
}
