<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{	
	//Serve para quando for criar registros em massa
    protected $fillable = [
        'titulo', 'descricao', 'autor', 'imagem'
    ];
}
