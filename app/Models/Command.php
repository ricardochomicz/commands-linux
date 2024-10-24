<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    protected $fillable = [
        'name',
        'input',
        'output',
        'description'
    ];
}
