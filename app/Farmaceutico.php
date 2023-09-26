<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Farmaceutico extends Model
{
    protected $table = 'farmaceuticos';
	
	protected $fillable = array('crf');
	
	protected $guarded = ['id', '_token'];
}
