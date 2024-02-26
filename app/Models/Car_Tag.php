<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Tag extends Model
{
    use HasFactory;


    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
