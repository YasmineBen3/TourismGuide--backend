<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Step;
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
    public function offer()
    {
        return $this->belongsTo(Offer::class);
        
    }
    public function steps(){
        return $this->hasMany(Step::class);
    }
    public function location(){
        return $this->morphOne(Location::class, 'locatable');
    }
    public function transportation(){
        return $this->hasOne(Transportation::class);
    }
    public function personnel(){
        return $this->hasMany(Personnel::class);
    }
}
