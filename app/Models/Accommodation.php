<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Location;
use App\Models\Accommodation_type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    protected $fillable = [
        'accommodation_name',
        'accommodation_description',
        'price_day'
    ];
    public function offer(){
        return $this->morphOne(Offer::class, 'offerable');
    }
    public function location(){
        return $this->morphOne(Location::class, 'locatable');
    }
    public function accommodation_type(){
        return $this->belongsTo(Accommodation_type::class);
    }
}
