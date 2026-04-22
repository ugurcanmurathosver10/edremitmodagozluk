<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // Hatanın çözümü tam olarak burası:
    protected $fillable = [
        'name',
        'logo',
        'is_active',
        'sort_order'
    ];
}
