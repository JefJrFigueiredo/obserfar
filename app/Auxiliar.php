<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    protected $table = 'auxiliars';
	
	protected $fillable = array('classe', 'numero');
	
	protected $guarded = ['id', '_token'];
}
