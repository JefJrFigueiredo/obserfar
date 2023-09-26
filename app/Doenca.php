<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    protected $table = 'doencas';
	public $timestamps = false;
	
	protected $fillable = array('nome', 'cid10');
	
	protected $guarded = ['id', '_token'];
}
