<?php

namespace obserfar\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use obserfar\PRM;
use Request;
use obserfar\Http\Requests\PRMRequest;

class PRMController extends Controller
{
	public function novo(){
		return view('prmview.pergunta1');
	}
	
	
	public function adiciona(PRMRequest $request){
		$_SESSION['prm_resultado'] = $request->tipoPRM;
		
		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
		
		//return $request->tipoPRM;
	}
	
	//**************************************************************************
	//PERGUNTAS
	public function pergunta2(){
		return view('prmview.pergunta2');
	}
	
	public function pergunta3(){
		return view('prmview.pergunta3');
	}
	
	public function pergunta4(){
		return view('prmview.pergunta4');
	}
	
	public function pergunta5(){
		return view('prmview.pergunta5');
	}
	
	public function pergunta6(){
		return view('prmview.pergunta6');
	}
	
	public function pergunta7(){
		return view('prmview.pergunta7');
	}
		
	//PRMS
	public function PRM1(){
		return view('prmview.prm1');
	}
	
	public function PRM2(){
		return view('prmview.prm2');
	}
	
	public function PRM3(){
		return view('prmview.prm3');
	}
	
	public function PRM4(){
		return view('prmview.prm4');
	}
	
	public function PRM5(){
		return view('prmview.prm5');
	}
	
	public function PRM6(){
		return view('prmview.prm6');
	}
	
	public function fimavaliacao(){
		return view('prmview.fimavaliacao');
	}
	
	//**************************************************************************
}
