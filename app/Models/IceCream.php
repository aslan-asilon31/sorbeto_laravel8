<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IceCream extends Model
{
    use HasFactory;

    
    protected $table = 'ice_creams';
    protected $primaryKey = 'ice_cream_id';
    protected $fillable = [
        'status_id',
        'name',
        'flavor',
        'color',
        'price',
        'stock',
        'type',
    ];

}
