<?php

namespace App\Models;
use App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function tours(){
        return $this->belongsTo(Tour::class);
    }

}
