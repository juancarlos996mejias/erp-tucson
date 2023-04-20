<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class productos extends Model
{

    use Notifiable;

    

    protected $fillable= [
        'codigo','articulo','lote'
    ];

};
