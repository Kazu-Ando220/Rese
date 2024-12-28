<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['name','area_id','genre_id','description','image_url'];


    public function reservations()
    {
        return $this->belongsToMany(Operation_user::class, 'reservations')->withPivot('num_of_users','start_at');
    }

    public function likes()
    {
        return $this->belongsToMany(Operation_user::class, 'likes')->withPivot('name','description','image_url');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
