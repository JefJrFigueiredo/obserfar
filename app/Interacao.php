<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Interacao extends Model
{
    protected $table = 'interacaos';
	public $timestamps = false;
	
	protected $fillable = array('interacao');
	
	protected $guarded = ['id', '_token'];
	
	public function medicamento_interacaos()
    {
        return $this->hasMany('App\Medicamento_interacaos');
    }
}