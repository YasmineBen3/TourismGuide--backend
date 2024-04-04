<?php

namespace App\Models;
use App\Models\Tour;
use App\Models\Facture;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'telephone'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    public function factures(){
        return $this->hasMany(Facture::class);
    }
}
