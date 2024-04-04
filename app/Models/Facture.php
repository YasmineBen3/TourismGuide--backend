<?php

namespace App\Models;
use App\Models\Payment;
use App\Models\Personnel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function personnel(){
        return $this->belongsTo(Personnel::class);
    }
}
