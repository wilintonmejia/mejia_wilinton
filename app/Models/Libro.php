<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table='libro';
    protected $primaryKey = 'id';
    public function editorial(){
        return $this->belongsTo(Editorial::class, 'editorial_fk', 'id');    }
}
