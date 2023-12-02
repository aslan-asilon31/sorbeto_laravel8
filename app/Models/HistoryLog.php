<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryLog extends Model
{
    use HasFactory;

    
    protected $table = 'history_logs';

    // Explicitly declare the primary key
    protected $primaryKey = 'id';

    protected $fillable = [
        'module',
        'key_id',
        'txt',
        'user_create',
    ];
}
