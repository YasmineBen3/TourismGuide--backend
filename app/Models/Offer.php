<?php

namespace App\Models;
use App\Models\Host;
use App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 
        'is_available',
        'host_id',
    ];
    public function host(){
        return $this->belongsTo(Host::class);
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'reservations');
    }
}
