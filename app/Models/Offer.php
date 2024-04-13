<?php

namespace App\Models;
use App\Models\Host;
use App\Models\Client;
use App\Models\Car;
use App\Models\Restaurant;
use App\Models\Hotel;
use App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    public function host(){
        return $this->belongsTo(Host::class);
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'reservations');
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
