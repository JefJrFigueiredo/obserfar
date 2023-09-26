<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Adesaotratamento extends Model
{
    protected $table = 'arvores';
	public $timestamps = false;
	
	protected $fillable = array('r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'adesaoaotratamento');
	
	
	protected $guarded = ['id', '_token'];
}
