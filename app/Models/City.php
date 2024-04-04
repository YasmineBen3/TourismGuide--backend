<?php

namespace App\Models;
use App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable=[
        'city_name'
    ];

    public function locations(){
        return $this->hasMany(Location::class);
    }

}
