<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;
    function VillaType(){
        return $this->belongsTO(VillaType::class,'villa_type_id');
    }
}
