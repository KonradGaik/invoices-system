<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klient extends Model
{
    use HasFactory;


    public function invoices(){
        return $this->hasMany('App\Models\fakturomat');

    }
}
