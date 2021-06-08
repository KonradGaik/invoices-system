<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakturomat extends Model
{
    use HasFactory;

    public function klient(){
        return $this->belongsTo('App\Models\klient');

    }

}
