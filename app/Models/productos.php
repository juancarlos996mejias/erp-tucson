<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class productos extends Model
{

    use Notifiable;

    
// tabla
    protected $table='productos';
    protected $fillable = [
      'id','codigo','articulo','lote','marca','rubro','stock'
    ];  



   
       
  //timestamp
  public $timestams = false;
  //guarded
  protected $guarded = [];  

};
