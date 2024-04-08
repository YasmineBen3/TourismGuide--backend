<?php

namespace App\Models;
use App\Models\Accommodation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation_type extends Model
{
    use HasFactory;
    public function accommodations(){
        return $this->hasMany(Accommodation::class);
    }
}
