<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Genre extends Pivot
{
    // use HasFactory;

    protected $table = 'genres';
    protected $fillable = ['name'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
