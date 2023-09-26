<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    protected $table = 'rams';
	public $timestamps = false;
	
	protected $fillable = array('medicamentosusp', 'sintomas', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'resultado');
	
	protected $guarded = ['id', '_token'];
}
