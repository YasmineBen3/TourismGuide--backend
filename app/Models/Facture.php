<?php

namespace App\Models;
use App\Models\Payment;
use App\Models\Reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
