<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';
    protected $fillable = ['titulo', 'categoria_id'];

    public function Categoria(){
    	return $this->belognsTo(Categoria::class,'categoria_id');
    }

    public function Preguntas(){
    	return $this->hasMany(Examen::class,'examen_id');
    }
}
