<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
use obserfar\Doenca;
use Request;
use obserfar\Http\Requests\DoencasRequest;

class DoencaController extends Controller
{
    public function lista(){
		
		$doencas = Doenca::all()->sortBy('nome');
		
		return view('doenca.listagem')->with('doencas',$doencas);
	}
	
	public function mostra($id){
		
		$doenca = Doenca::find($id);
			
		if(empty($doenca)) {
			return "Esse doenca não existe";
		}
		
		return view('doenca.detalhes')->with('d', $doenca);
	}
	
	public function novo(){
		return view('doenca.formulario');
	}
	
	public function adiciona(DoencasRequest $request){
		
		Doenca::create($request->all());
		
		return redirect()
			->action('DoencaController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function confirmaEdicao(DoencasRequest $request){
		
		$id = Request::only('id');
		
		Doenca::where('id',$id)->update($request->except('_token'));
		
		return redirect()
			->action('DoencaController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function listaJson(){
		$doencas = Doenca::all();
		return response()->json($doencas);
	}
	
	public function remove($id){
		
		$doenca = Doenca::find($id);
		$doenca->delete();
		return redirect()->action('DoencaController@lista');
	}
	
	public function edita($id){
		
		$doenca = Doenca::find($id);
			
		if(empty($doenca)) {
			return "Esse doenca não existe";
		}
		
		return view('doenca.formulario')->with('d', $doenca);
	}
}
