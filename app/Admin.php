<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
	
	protected $fillable = array('classe', 'numero');
	
	protected $guarded = ['id', '_token'];
}
