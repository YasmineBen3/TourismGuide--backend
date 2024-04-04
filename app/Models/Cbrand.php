<?php

namespace App\Models;
use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbrand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name', 'brand_model',
    ];

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
