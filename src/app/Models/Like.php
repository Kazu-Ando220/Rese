<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Datebase\Eloquent\Relations\Pivot;

class Like extends Pivot
{
    // use HasFactory;

    protected $table = 'likes';
    protected $fillable = [
        'shop_id',
        'operation_user_id'
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
