<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'buser',
        'bdate',
        'bfrompincode',
        'bfromplace',
        'btopincode',
        'btoplace',
        'bmode',
        'bkm',
        'bda',
        'bamount',
        'bcid'
    ];

    
}

