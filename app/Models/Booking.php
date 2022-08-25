<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    function locataire(){
        return $this->belongsTo(locataire::class);
    }

    function villa(){
        return $this->belongsTo(Villa::class);
    }
}
