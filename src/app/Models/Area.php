<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = ['name'];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
