<?php

namespace App\Models;
use App\Models\Client;
use App\Models\Facture;
use App\Models\Offer;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'reservation_date',
        'client_id'
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function facture(){
        return $this->hasOne(Facture::class);
    }
    public function offer(){
        return $this->belongsTo(Offre::class);
    }
}
