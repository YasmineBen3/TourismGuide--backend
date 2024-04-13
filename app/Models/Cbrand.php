<?php

namespace App\Models;
use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbrand extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
