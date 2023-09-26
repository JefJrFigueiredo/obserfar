<?php

namespace obserfar\Http\Controllers;

use Illuminate\Support\Facades\DB;
use obserfar\UserModel;
use Request;
use obserfar\Http\Requests\UsuariosRequest;

class UsuarioController extends Controller
{
    public function lista(){
		
		$usuarios = UserModel::all()->sortBy('name');
		
		return view('usuario.listagem')->with('usuarios',$usuarios);
	}
	
	public function mostra($id){
		
		$usuario = UserModel::find($id);
			
		if(empty($usuario)) {
			return "Esse usuário não existe";
		}
		
		return view('usuario.detalhes')->with('u', $usuario);
	}
	
	public function novo(){
		return view('usuario.formulario');
	}
	
	public function novoadmin(){
		return view('usuario.admin.formulario');
	}
	
	public function novoauxiliar(){
		return view('usuario.auxiliar.formulario');
	}
	
	public function novobolsista(){
		return view('usuario.bolsista.formulario');
	}
	
	public function novoespecialista(){
		return view('usuario.especialista.formulario');
	}
	
	public function novofarmaceutico(){
		return view('usuario.farmaceutico.formulario');
	}
	
	public function adiciona(UsuariosRequest $request){
		
		UserModel::create($request->all());
		
		return redirect()
			->action('UsuarioController@novo'.Request::only('cargo'))
			->withInput(Request::only('nome'));
	}
	
	public function adicionaAdmin(AdminsRequest $request){
		
		Admin::create($request->all());
		
		return redirect()
			->action('UsuarioController@lista')
			->withInput(Request::only('nome'));
	}
	
	public function confirmaEdicao(UsuariosRequest $request){
		
		$id = Request::only('id');
		
		UserModel::where('id',$id)->update($request->except('_token'));
		
		return redirect()
			->action('UsuarioController@lista')
			->withInput(Request::only('name'));
	}
	
	public function listaJson(){
		//$usuarios = UserModel::all();
		$usuarios = UserModel::findOrFail(1);
		return response()->json($usuarios);
	}
	
	public function remove($id){
		
		$usuario = UserModel::find($id);
		$usuario->delete();
		return redirect()->action('UsuarioController@lista');
	}
	
	public function edita($id){
		
		$usuario = UserModel::find($id);
			
		if(empty($usuario)) {
			return "Esse usuário não existe";
		}
		
		return view('usuario.formulario')->with('u', $usuario);
	}
}
