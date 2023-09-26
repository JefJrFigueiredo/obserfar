<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
use obserfar\Interacao;
use obserfar\Medicamento;
use obserfar\Medicamento_interacao;
use Request;
use obserfar\Http\Requests\InteracaosRequest;

class InteracaoController extends Controller
{
    public function lista($id){
		
		$medicamento = Medicamento::find($id);
		
		$med_interacoes = Medicamento_interacao::where('medicamento_id',$id)->get();
		/*
		foreach ($med_interacoes as $m){
			$i['usuario'] = User::find($i->usuario)->name;
		}
		*/
		$interacoes = Interacao::where('id',$med_interacoes->interacao_id)->get();
		
		foreach ($interacoes as $i){
			$i['usuario'] = User::find($i->usuario)->name;
		}
		
		return view('interacao.listagem')->with([
		'interacoes' => $interacoes
		]);
		
		//return $interacoes;
	}
	
	public function mostra($id){
		
		$interacao = Interacao::find($id);
			
		if(empty($interacao)) {
			return "Esse interacao não existe";
		}
		
		return view('interacao.detalhes')->with('m', $interacao);
	}
	
	public function novo($medicamento_id){
		$medicamento = Medicamento::find($medicamento_id);
		$medicamentos = Medicamento::where('id','<>',$medicamento_id)->get()->sortBy('nome');
		
		return view('interacao.formulario')->with([
			'medicamento'=>$medicamento,
			'medicamentos'=>$medicamentos,
			'medicamento_id'=>$medicamento_id,
		]);
	}
	
	public function adiciona(InteracaosRequest $request){
		
		$interacao = Interacao::create($request->only('interacao'));
		
		$int_medicamento1 = Medicamento_interacao::create([
			'interacao_id' => $interacao->id, 
			'medicamento_id' => $request->medicamento1
		]);
		
		$int_medicamento2 = Medicamento_interacao::create([
			'interacao_id' => $interacao->id, 
			'medicamento_id' => $request->medicamento2
		]);
		
		return redirect()
			->action('InteracaoController@lista',$int_medicamento1->medicamento_id);
	}
	
	public function confirmaEdicao(InteracaosRequest $request){
		
		$id = Request::only('id');
		
		Interacao::where('id',$id)->update($request->except('_token'));
		
		return redirect()
			->action('InteracaoController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function listaJson(){
		$interacoes = Interacao::all();
		return response()->json($interacoes);
	}
	
	public function remove($id){
		
		$interacao = Interacao::find($id);
		$interacao->delete();
		return redirect()->action('InteracaoController@lista');
	}
	
	public function edita($id){
		
		$interacao = Interacao::find($id);
			
		if(empty($interacao)) {
			return "Esse interacao não existe";
		}
		
		return view('interacao.formulario')->with('m', $interacao);
	}
}
