<?php

namespace App\Models;
use App\Models\Facture;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'type',
        'facture_id'
    ];
    public function facture(){
        return $this->belongsTo(Facture::class);
    }
}
