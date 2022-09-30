<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifiecationCode extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'otp',
        'expire_at',
        'created_at'

    ];
}
