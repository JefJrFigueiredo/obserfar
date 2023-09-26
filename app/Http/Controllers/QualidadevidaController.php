<?php

namespace obserfar\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use obserfar\Qualidadevida;
use Request;
use obserfar\Http\Requests\QualidadevidasRequest;

class QualidadevidaController extends Controller
{
    public function lista(){
		
		$qualidadevidas = Qualidadevida::all();
		
		return view('qualidadevida.listagem')->with('qualidadevidas',$qualidadevidas);
	}
	
	public function mostra($id){
		
		$qualidadevida = Qualidadevida::find($id);
			
		if(empty($qualidadevida)) {
			return "Esse qualidadevida não existe";
		}
		
		return view('qualidadevida.detalhes')->with('q', $qualidadevida);
	}
	
	public function novo(){
		return view('qualidadevida.formulario');
	}
	
	public function edita($id){
		
		$qualidadevida = Qualidadevida::find($id);
			
		if(empty($qualidadevida)) {
			return "Essa qualidadevida não existe";
		}
		
		return view('qualidadevida.formulario')->with('q', $qualidadevida);
	}
	
	public function adiciona(QualidadevidasRequest $request){
		
		$request = $this->resultados($request);
		$qualidadevida = Qualidadevida::create($request->except('_token'));	
		
		$_SESSION['qualidadevida_id'] = $qualidadevida->id;
		
 		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
	}
	
	public function confirmaEdicao(QualidadevidasRequest $request){
		
		$id = Request::only('id');		
		$request = $this->resultados($request);
		Qualidadevida::where('id',$id)->update($request->except('_token'));
		
		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
	}
	
	public function listaJson(){
		$qualidadevidas = Qualidadevida::all();
		return response()->json($qualidadevidas);
	}
	
	public function remove($id){
		
		$qualidadevida = Qualidadevida::find($id);
		$qualidadevida->delete();
		return redirect()->action('QualidadevidaController@lista');
	}
	
	public function resultados($request){
		$request['dom_fisico'] = $this->dominioFisico($request);
		$request['dom_psico'] = $this->dominioPsicologico($request);
		$request['dom_social'] = $this->dominioSocial($request);
		$request['dom_ambiente'] = $this->dominioAmbiente($request);
		return $request;
	}
	
	public function dominioFisico($r){
		$media = 
		($r->r3+
		$r->r4+
		$r->r10+
		$r->r15+
		$r->r16+
		$r->r17+
		$r->r18)
		/7;
		return $this->classificador($media);
	}
	
	public function dominioPsicologico($r){
		$media = 
		($r->r5+
		$r->r6+
		$r->r7+
		$r->r11+
		$r->r19+
		$r->r26)
		/6;
		return $this->classificador($media);
	}
	
	public function dominioSocial($r){
		$media = 
		($r->r20+
		$r->r21+
		$r->r22)
		/3;
		return $this->classificador($media);
	}
	
	public function dominioAmbiente($r){
		$media = 
		($r->r8+
		$r->r9+
		$r->r12+
		$r->r13+
		$r->r14+
		$r->r23+
		$r->r24+
		$r->r25)
		/8;
		return $this->classificador($media);
	}
	
	public function classificador($media){
		if($media < 3){
			return 'Necessita melhorar';
		}
		else if($media < 4) {
			return 'Regular';
		}
		else if($media < 5) {
			return 'Boa';
		}
		else {
			return 'Muito boa';
		}
	}
}
