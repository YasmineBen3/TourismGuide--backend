<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Cuisine;
use App\Models\Location;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_name',
        'restaurant_description'
    ];
    public function location(){
        return $this->morphOne(Location::class, 'locatable');
    }
    public function offer(){
        return $this->morphOne(Offer::class, 'offerable');
    }
    public function cuisine(){
        return $this->belongsTo(Cuisine::class);
    }
}
