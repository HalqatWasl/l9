<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'is_active',
    ];

    public function directorate()
    {
            return $this->belongsTo(Directorate::class);
    }

}
