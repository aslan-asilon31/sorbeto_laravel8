<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMaster extends Model
{
    use HasFactory;

    protected $table = 'status_masters';
    protected $primaryKey = 'status_id';
    protected $fillable = [
        'name',
    ];
}
