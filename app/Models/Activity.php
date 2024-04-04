<?php

namespace App\Models;
use App\Models\Step;

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
    public function step(){
        return $this->belongsTo(Step::class);
    }
}
