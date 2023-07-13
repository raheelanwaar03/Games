<?php

namespace App\Models\auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpVerfication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'otp',
        'expires_at',
    ];

}
