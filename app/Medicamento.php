<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamentos';
	
	public $timestamps = false;
	
	protected $fillable = array('nome', 'principio', 'lab');
	
	protected $guarded = ['id', '_token'];
	
	public function medicamento_interacaos()
    {
        return $this->hasMany('App\Medicamento_interacaos');
    }
}
