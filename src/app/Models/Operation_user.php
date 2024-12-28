<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation_user extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','password'];


    public function reservations()
    {
        return $this->belongsToMany(Reservation::class)->using(Reservation::class)->withPivot('num_of_users','start_at');
    }

    public function likes()
    {
        return $this->belongsToMany(Shop::class)->using(Like::class)->withPivot('name','description','image_url');
    }

    public function areas()
    {
        return $this->bellongsToMany(Area::class)->using(Area::class)->withPivot('name');
    }

    public function genres()
    {
        return $this->bellongsToMany(Genre::class)->using(Genre::class)->withPivot('name');
    }
}
