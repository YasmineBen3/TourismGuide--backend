<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Cities;
use App\Models\Transportation;
use App\Models\Personnel;
use App\Models\Activities;
use App\Models\Location;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_name',
        'tour_description',
        'tour_date',
        'tour_price',
        'npt', 
        'offer_id'

    ];
    public function offer(){
        return $this->morphOne(Offer::class, 'offerable');
    }
    public function activities(){
        return $this->belongsToMany(Activity::class);
    }
    public function location(){
        return $this->morphOne(Location::class, 'locatable');
    }
    public function transportations(){
        return $this->hasMany(Transportation::class);
    }
    public function personnels(){
        return $this->hasMany(Personnel::class);
    }
    public function cities(){
        return $this->hasMany(City::class);
    }

}
