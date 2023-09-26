<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
	public $timestamps = true;
	
	protected $fillable = array('paciente', 'usuario', 'qualidadevida_id', 'arvores_id', 'prm_resultado', 'ram_id');
	
	protected $guarded = ['id', '_token'];
}
