<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $table = 'especialistas';
	
	protected $fillable = array('classe', 'numero');
	
	protected $guarded = ['id', '_token'];
}
