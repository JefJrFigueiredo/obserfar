<?php

namespace obserfar;

use Illuminate\Database\Eloquent\Model;

class Qualidadevida extends Model
{
    protected $table = 'qualidadevidas';
	public $timestamps = false;
	
	protected $fillable = array('r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17', 'r18', 'r19', 'r20', 'r21', 'r22', 'r23', 'r24', 'r25', 'r26', 'dom_fisico', 'dom_psico', 'dom_social', 'dom_ambiente');
	
	protected $guarded = ['id', '_token'];
}
