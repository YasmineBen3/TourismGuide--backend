<?php

namespace App\Models;
use App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'max_places'
    ];

    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
