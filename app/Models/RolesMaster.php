<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesMaster extends Model
{
    use HasFactory;

    protected $table = 'roles_masters';
    protected $primaryKey = 'roles_id';
    protected $fillable = [
        'status_id',
        'name',
    ];
}
