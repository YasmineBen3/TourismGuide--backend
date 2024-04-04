<?php

namespace App\Models;

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
}
