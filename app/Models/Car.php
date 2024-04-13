<?php

namespace App\Models;
use App\Models\Offer;
use App\Models\Cmodel;
use App\Models\Cbrand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function cmodels()
    {
        return $this->hasMany(Cmodel::class);
    }

    public function cbrand(){
        return $this->belongsTo(Cbrand::class);
    }

    public function offer(){
        return $this->hasOne(Offer::class);
    }
}
