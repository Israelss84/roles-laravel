<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
	protected $table = 'categorias';
    protected $fillable = ['categoria','departamento_id'];

    public function Departamento(){
    	return $this->belongsTo(Departamento::class,'departamento_id');
    }

    public function Examenes(){
    	return $this->hasMany(Examen::class,'categoria_id');
    }
}
