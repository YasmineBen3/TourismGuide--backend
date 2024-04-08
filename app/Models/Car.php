<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Cbrand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_day',
    ];

    public function cbrand()
    {
        return $this->belongsTo(Cbrand::class);
    }

    public function offer(){
        return $this->morphOne(Offer::class, 'offerable');
    }
}
