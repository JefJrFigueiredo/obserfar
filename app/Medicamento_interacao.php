<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Medicamento_interacao extends Model
{
    protected $table = 'medicamento_interacaos';
	public $timestamps = false;
	
	protected $fillable = array('interacao_id', 'medicamento_id');
	
	protected $guarded = ['_token'];
}