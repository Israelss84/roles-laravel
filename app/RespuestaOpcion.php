<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaOpcion extends Model
{
    protected $table = 'respuestasopcion';
    protected $fillable = ['respuesta', 'correcta','pregunta_id'];

    public function Pregunta(){
    	return $this->belognsTo(Pregunta::class,'pregunta_id');
    }
}
