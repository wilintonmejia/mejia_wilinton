<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table='editorial';
    protected $primaryKey = 'id';
    public function libro(){
        return $this->hasMany(Libro::class, 'editorial_fk', 'id');
    }
}
