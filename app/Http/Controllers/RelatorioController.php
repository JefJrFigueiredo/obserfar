<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use obserfar\Paramfisio;
use Request;
//use obserfar\Http\Requests\ParamfisiosRequest;

class RelatorioController extends Controller
{
    public function lista(){
		
		
		
		return view('relatorio.listagem');
	}
	
	
}
