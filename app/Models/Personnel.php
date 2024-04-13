<?php

namespace App\Models;
use App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;


    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

}
