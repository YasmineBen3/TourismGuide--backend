<?php

namespace App\Models;
use App\Models\Tour;
use App\Models\Activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'tour_id'
    ];
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
    public function activities(){
        return $this->hasMany(Activity::class);
    }
}
