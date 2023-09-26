<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
use obserfar\Paramfisio;
use obserfar\Paciente;
use Request;
use obserfar\Http\Requests\ParamfisiosRequest;

class ParamFisioController extends Controller
{
    public function lista($id){
		
		$paramfisios = Paramfisio::where('paciente',$id)->get()->sortByDesc('created_at');
		$paciente = Paciente::find($id);
		
		return view('paramfisio.listagem')->with([
			'paramfisios'=>$paramfisios,
			'paciente'=>$paciente
		]);
	}
	
	public function mostra($id){
		
		$paramfisio = Paramfisio::find($id);
			
		if(empty($paramfisio)) {
			return "Esse parametro fisiológico não existe";
		}
		$paramfisio['paciente'] = Paciente::find($paramfisio->paciente)->nome;
		
		return view('paramfisio.detalhes')->with('p', $paramfisio);
	}
	
	public function novo($paciente_id){
		return view('paramfisio.formulario')->with('paciente',$paciente_id);
	}
	
	public function edita($id){
		
		$paramfisio = Paramfisio::find($id);
			
		if(empty($paramfisio)) {
			return "Esse parâmetro fisiológico não existe";
		}
		
		return view('paramfisio.formulario')->with('p', $paramfisio);
	}
	
	public function adiciona(ParamfisiosRequest $request){
		
		$id = Paramfisio::create($request->all())->paciente;
		
		return redirect()->action('ParamFisioController@lista',$id);
	}
	
	public function confirmaEdicao(ParamfisiosRequest $request){
		
		$id = Request::only('id');
		
		Paramfisio::where('id',$id)->update($request->except('_token'));
		
		return redirect()->action('ParamFisioController@lista',Request::only('paciente'));
	}
	
	public function listaJson(){
		$paramfisios = Paramfisio::all();
		return response()->json($paramfisios);
	}
	
	public function remove($id){
		
		$paramfisio = Paramfisio::find($id);
		$paciente_id = $paramfisio->paciente;
		$paramfisio->delete();
		return redirect()->action('ParamFisioController@lista',$paciente_id);
	}
}
