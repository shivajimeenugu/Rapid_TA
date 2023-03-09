<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clime extends Model
{
    use HasFactory;

    protected $fillable = [

        'cuser' ,
        'cname' ,
        'camount' ,
        'cstatus' ,
        'cremarks'
    ];

    
}
