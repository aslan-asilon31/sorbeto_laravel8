<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'departemen_id',
        'full_name',
        'photo',
        'address',
        'mobile',
        'status',
    ];
}
