<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTR extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logged_in',
        // 'added_by',
        'logged_out',
        'date'
    ];
}
