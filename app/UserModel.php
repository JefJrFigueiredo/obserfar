<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';
	public $timestamps = true;
	
	protected $fillable = array('name', 'cargo', 'email', 'password');
	
	protected $guarded = ['id', '_token'];
}
