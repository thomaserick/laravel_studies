<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //Campos que podem ser preenchidos

    protected $fillable = ['saudacao', 'nome', 'telefone', 'email', 'data_nascimento', 'avatar', 'nota'];
}
