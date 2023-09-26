<?php

namespace obserfar\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use obserfar\Adesaotratamento;
use Request;
use obserfar\Http\Requests\AdesaotratamentoRequest;

class AdesaoTratamentoController extends Controller
{
    public function lista(){
		
		$adesaotratamentoVariavel = Adesaotratamento::all();//->sortBy('nome');
		
		return view('adesaotratamento.listagem')->with('adesaotratamentoVariavel',$adesaotratamentoVariavel);
	}
	
	public function mostra($id){
		
		$adesaotratamentoVariavel = Adesaotratamento::find($id);
			
		if(empty($adesaotratamentoVariavel)) {
			return "Essa adesão não existe";
		}
		
		return view('adesaotratamento.detalhes')->with('p', $adesaotratamentoVariavel);
	}
	
	public function novo(){
		return view('adesaotratamento.formulario');
	}
	
	public function edita($id){
		
		$adesaotratamentoVariavel = Adesaotratamento::find($id);
			
		if(empty($adesaotratamentoVariavel)) {
			return "Essa adesão não existe";
		}
		
		return view('adesaotratamento.formulario')->with('p', $adesaotratamentoVariavel);
	}
	
	public function adiciona(AdesaotratamentoRequest $request){
		
		$request = $this->resultado($request);
		$adesaotratamento = Adesaotratamento::create($request->all());
		
		$_SESSION['arvores_id'] = $adesaotratamento->id;
		
 		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['paciente']);
		}
	}
	
	public function confirmaEdicao(AdesaotratamentoRequest $request){
		
		$id = Request::only('id');
		$request = $this->resultado($request);
		Adesaotratamento::where('id',$id)->update($request->except('_token'));
		
		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
	}
	
	public function listaJson(){
		$adesaotratamentoVariavel = Adesaotratamento::all();
		
		
		
		
		
		return response()->json($adesaotratamentoVariavel);
	}
	
	public function remove($id){
		
		$adesaotratamentoVariavel = Adesaotratamento::find($id);
		$adesaotratamentoVariavel->delete();
		return redirect()->action('AdesaoTratamentoController@lista');
	}
	
	public function resultado($r){
		if($r->r1 == 'nao' &&
			$r->r2 == 'nao' &&
			$r->r3 == 'nenhum' &&
			$r->r4 == 'ambos normais' &&
			$r->r5 == 'nao' &&
			$r->r6 == 'nao' &&
			$r->r7 == 'nao' &&
			$r->r8 == 'nao'
			)
			$r['adesaoaotratamento'] = 'Adesão';
		else
			$r['adesaoaotratamento'] = 'Não adesão';
		return $r;
	}
}
