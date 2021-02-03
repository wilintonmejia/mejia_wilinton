<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libro';
    protected $primaryKey = 'id';
    public function editorial(){
        return $this->belongsTo(Editorial::class, 'editorial_fk', 'id');    
    }

    public function estado(){
        if($this->stock == '0'){
            return "Agotado";
        }
        elseif($this->stock >0 && $this->stock <= '10'){
            return "Ultimas Unidades";
        }
        else{
            return "Disponible";
        }

    }

    public static function descuento($editorial_fk){
        if($editorial_fk == '1' || $editorial_fk == '5'){
            
        }
        return static::where('precio', '>=', $precio)->get();
    }

}
