<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Reservation extends Pivot
{
    // use HasFactory;

    protected $table = 'reservations';
    protected $fillable = [
        'shop_id',
        'operation_user_id',
        'num_of_users',
        'start_at',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
