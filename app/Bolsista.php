<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Bolsista extends Model
{
    protected $table = 'bolsistas';
	
	protected $fillable = array('matricula', 'curso', 'instituicao');
	
	protected $guarded = ['id', '_token'];
}
