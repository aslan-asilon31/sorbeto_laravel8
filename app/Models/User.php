<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'company_id',
        'role_id',
        'sales_level_id',
        'name',
        'email',
        'password',
        'photo',
        'phone_number',
        'current_lat',
        'current_lgn',
        'update_location_date',
        'is_active',
        'nik',
        'created_date',
        'created_by',
        'updated_date',
        'updated_by',
        'last_update_password_date',
        'last_update_password_by',
        'is_privilage',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
