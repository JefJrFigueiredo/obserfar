<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Paramfisio extends Model
{
    protected $table = 'paramfisios';
	public $timestamps = true;
	
	protected $fillable = array('paciente', 'nome', 'valor');
	
	protected $guarded = ['id', '_token'];
}
