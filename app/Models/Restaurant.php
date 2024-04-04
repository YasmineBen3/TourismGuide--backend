<?php

namespace App\Models;
use App\Models\Offer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_name',
        'restaurant_description'
    ];
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
    public function location(){
        return $this->morphOne(Location::class, 'locatable');
    }
}
