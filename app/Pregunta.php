<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $fillable = ['orden', 'pregunta','tipo','examen_id'];

    public function Examen(){
    	return $this->belognsTo(Examen::class,'examen_id');
    }

    public function Respuestas(){
    	return $this->hasMany(Respuesta::class,'pregunta_id');
    }
}
