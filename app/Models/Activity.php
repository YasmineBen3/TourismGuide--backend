<?php

namespace App\Models;
use App\Models\Tour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'activity_name',
        'activity_description',
        'tour_id',
    ];
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }
}
