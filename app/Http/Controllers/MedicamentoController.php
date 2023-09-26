<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
use obserfar\Medicamento;
use Request;
use obserfar\Http\Requests\MedicamentosRequest;

class MedicamentoController extends Controller
{
    public function lista(){
		
		$medicamentos = Medicamento::all()->sortBy('nome');
		
		return view('medicamento.listagem')->with('medicamentos',$medicamentos);
	}
	
	public function mostra($id){
		
		$medicamento = Medicamento::find($id);
			
		if(empty($medicamento)) {
			return "Esse medicamento não existe";
		}
		
		return view('medicamento.detalhes')->with('m', $medicamento);
	}
	
	public function novo(){
		return view('medicamento.formulario');
	}
	
	public function adiciona(MedicamentosRequest $request){
		
		Medicamento::create($request->all());
		
		return redirect()
			->action('MedicamentoController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function confirmaEdicao(MedicamentosRequest $request){
		
		$id = Request::only('id');
		
		Medicamento::where('id',$id)->update($request->except('_token'));
		
		return redirect()
			->action('MedicamentoController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function listaJson(){
		$medicamentos = Medicamento::all();
		return response()->json($medicamentos);
	}
	
	public function remove($id){
		
		$medicamento = Medicamento::find($id);
		$medicamento->delete();
		return redirect()->action('MedicamentoController@lista');
	}
	
	public function edita($id){
		
		$medicamento = Medicamento::find($id);
			
		if(empty($medicamento)) {
			return "Esse medicamento não existe";
		}
		
		return view('medicamento.formulario')->with('m', $medicamento);
	}
}
