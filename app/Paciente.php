<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
	public $timestamps = true;
	
	protected $fillable = array('nome', 'rg', 'nascimento', 'sus', 'escolaridade', 'peso', 'altura', 'alcool', 'telefone', 'unidade', 'tabaco', 'genero', 'atividade_fisica');
	
	protected $guarded = ['id', '_token'];
}