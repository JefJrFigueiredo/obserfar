<?php

namespace obserfar\Http\Controllers;

session_start();

use Auth;
use Illuminate\Support\Facades\DB;
use obserfar\Paciente;
use obserfar\Consulta;
use obserfar\User;
use obserfar\Qualidadevida;
use obserfar\Adesaotratamento;
use obserfar\RAM;
use Request;
use obserfar\Http\Requests\ConsultasRequest;

class ConsultaController extends Controller
{
	public function lista($id){
		
		session_destroy();
		
		$paciente = Paciente::find($id);
		
		$consultas = Consulta::where('paciente',$id)->get()->sortByDesc('created_at');
		
		foreach ($consultas as $c){
			$c['usuario'] = User::find($c->usuario)->name;
		}
		
		return view('consulta.listagem')->with([
			'paciente'=>$paciente,
			'consultas'=>$consultas
		]);
	}
	public function prontuario($id){
		
		$paciente = Paciente::find($id);
		
		$consultas = Consulta::where('paciente',$id)->get()->sortByDesc('created_at');
		
		foreach ($consultas as $c){
			$c['usuario'] = User::find($c->usuario)->name;
			$c['dom_fisico'] = Qualidadevida::find($c->qualidadevida_id)->dom_fisico;
			$c['dom_psico'] = Qualidadevida::find($c->qualidadevida_id)->dom_psico;
			$c['dom_social'] = Qualidadevida::find($c->qualidadevida_id)->dom_social;
			$c['dom_ambiente'] = Qualidadevida::find($c->qualidadevida_id)->dom_ambiente;
			$c['adesao'] = Adesaotratamento::find($c->arvores_id)->adesaoaotratamento;
			$c['medicamentosusp'] = RAM::find($c->ram_id)->medicamentosusp;
			$c['sintomas'] = RAM::find($c->ram_id)->sintomas;
			$c['resultado'] = RAM::find($c->ram_id)->resultado;
		}
		
		return view('consulta.prontuario')->with([
			'paciente'=>$paciente,
			'consultas'=>$consultas
		]);
	}
	
	public function mostra($id){
		
		$consulta = Consulta::find($id);
			
		if(empty($consulta)) {
			return "Esse consulta não existe";
		}
		
		$consulta['paciente'] = Paciente::find($consulta->paciente)->nome;
		$consulta['usuario'] = User::find($consulta->usuario)->name;
		$consulta['dom_fisico'] = Qualidadevida::find($consulta->qualidadevida_id)->dom_fisico;
		$consulta['dom_psico'] = Qualidadevida::find($consulta->qualidadevida_id)->dom_psico;
		$consulta['dom_social'] = Qualidadevida::find($consulta->qualidadevida_id)->dom_social;
		$consulta['dom_ambiente'] = Qualidadevida::find($consulta->qualidadevida_id)->dom_ambiente;
		$consulta['adesao'] = Adesaotratamento::find($consulta->arvores_id)->adesaoaotratamento;
		$consulta['medicamentosusp'] = RAM::find($consulta->ram_id)->medicamentosusp;
		$consulta['sintomas'] = RAM::find($consulta->ram_id)->sintomas;
		$consulta['resultado'] = RAM::find($consulta->ram_id)->resultado;
		
		return view('consulta.detalhes')->with('c', $consulta);
	}
	
	public function novo($id){
		
		$_SESSION['novo'] = true;
		$_SESSION['paciente'] = $id;
		$_SESSION['usuario'] = Auth::user()->id;
		
		return view('consulta.formulario');
	}
	
	public function adiciona(ConsultasRequest $request){
		
		$consulta = Consulta::create($request->all());
		
		return redirect()->action('ConsultaController@lista',[$_SESSION['paciente']]);
		
		//return $request->all();
	}
	
	public function edita($id){
		
		$consulta = Consulta::find($id);
		
		$_SESSION['novo'] = false;
		$_SESSION['usuario'] = Auth::user()->id;
		$_SESSION['consulta'] = $id;
		$_SESSION['paciente'] = $consulta->paciente;
		
		$qualidadevida_id = $consulta->qualidadevida_id;
		$arvores_id = $consulta->arvores_id;
		$ram_id = $consulta->ram_id;
		if(empty($_SESSION['prm_resultado'])){
			$prm_resultado = $consulta->prm_resultado;
			$_SESSION['prm_resultado'] = $prm_resultado;
		}
		
		$_SESSION['qualidadevida_id'] = $consulta->qualidadevida_id;
		$_SESSION['arvores_id'] = $consulta->arvores_id;
		$_SESSION['ram_id'] = $consulta->ram_id;
		
		if(empty($consulta)) {
			return "Essa consulta não existe";
		}
		
		return view('consulta.formulario')->with('c', $consulta);
	}
	
	public function confirmaEdicao(ConsultasRequest $request){
		
		$id = Request::only('id');
		
		Consulta::where('id',$id)->update($request->except('_token'));
		
		return redirect()->action('ConsultaController@lista',[$_SESSION['paciente']]);
	}
	
	public function listaJson($dados){
		$consultas = Consulta::all();
		return response()->json($consultas);
	}
	
	public function remove($id){
		
		$consulta = Consulta::find($id);
		$_SESSION['paciente'] = $consulta->paciente;
		$qualidadevida = Qualidadevida::find($consulta->qualidadevida_id);
		$consulta->delete();
		$qualidadevida->delete();
		return redirect()->action('ConsultaController@lista',[$_SESSION['paciente']]);
	}
}
