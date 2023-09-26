<?php

namespace obserfar\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use obserfar\Paciente;
use Request;
use obserfar\Http\Requests\PacientesRequest;

class PacienteController extends Controller
{
    public function lista(){
		
		session_destroy();
		
		$pacientes = Paciente::all()->sortBy('nome');
		
		return view('paciente.listagem')->with('pacientes',$pacientes);
	}
	
	public function mostra($id){
		
		$paciente = Paciente::find($id);
			
		if(empty($paciente)) {
			return "Esse paciente não existe";
		}
		
		return view('paciente.detalhes')->with('p', $paciente);
	}
	
	public function novo(){
		return view('paciente.formulario');
	}
	
	public function adiciona(PacientesRequest $request){
		
		Paciente::create($request->all());
		
		return redirect()
			->action('PacienteController@lista')
			->withInput(Request::only('nome'));
		
	}
	
	public function confirmaEdicao(PacientesRequest $request){
		
		$id = Request::only('id');
		
		Paciente::where('id',$id)->update($request->except('_token'));
		
		return redirect()
			->action('PacienteController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function listaJson(){
		$pacientes = Paciente::all();
		return response()->json($pacientes);
	}
	
	public function remove($id){
		
		$paciente = Paciente::find($id);
		$paciente->delete();
		return redirect()->action('PacienteController@lista');
	}
	
	public function edita($id){
		
		$paciente = Paciente::find($id);
			
		if(empty($paciente)) {
			return "Esse paciente não existe";
		}
		
		return view('paciente.formulario')->with('p', $paciente);
	}
}
