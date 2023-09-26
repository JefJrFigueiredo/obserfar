<?php

namespace obserfar\Http\Controllers;

session_start();

use Illuminate\Support\Facades\DB;
use obserfar\RAM;
use Request;
use obserfar\Http\Requests\RAMRequest;

class RAMController extends Controller
{
    public function lista(){
		
		$rams = RAM::all();
		
		return view('ramview.listagem')->with('rams',$rams);
	}
	
	public function mostra($id){
		
		$ram = RAM::find($id);
			
		if(empty($ram)) {
			return "Esse RAM não existe";
		}
		
		return view('ramview.detalhes')->with('q', $ram);
	}
	
	public function novo(){
		return view('ramview.formulario');
	}
	
	public function edita($id){
		
		$ram = RAM::find($id);
			
		if(empty($ram)) {
			return "Essa RAM não existe";
		}
		
		return view('ramview.formulario')->with('q', $ram);
	}
	
	public function adiciona(RAMRequest $request){
		
		$request = $this->resultado($request);
		$ram = RAM::create($request->except('_token'));	
		
		$_SESSION['ram_id'] = $ram->id;
		
 		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
		
		return redirect()
			->action('RAMController@lista');
			//->withInput(Request::only('nome'));
	}
	
	public function confirmaEdicao(RAMRequest $request){
		
		$id = Request::only('id');		
		$request = $this->resultado($request);
		RAM::where('id',$id)->update($request->except('_token'));
		
		if ($_SESSION['novo']){
			return redirect()->action('ConsultaController@novo',$_SESSION['paciente']);
		}
		else{
			return redirect()->action('ConsultaController@edita',$_SESSION['consulta']);
		}
		return redirect()
			->action('RAMController@lista');
	}
	
	public function listaJson(RAMRequest $request){
		//$rams = RAM::all();
		$request = $this->resultado($request);
		return response()->json($request);
	}
	
	public function remove($id){
		
		$qualidadevida = RAM::find($id);
		$qualidadevida->delete();
		return redirect()->action('RAMController@lista');
	}
	
	public function resultado($r){
		$resultado = 0;
		if($r->r1 == 'sim'){
			$resultado += 1;
		}else if($r->r1 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		if($r->r2 == 'sim'){
			$resultado += 2;
		}else if($r->r2 == 'nao'){
			$resultado -= 1;
		}else
			$resultado += 0;
		
		if($r->r3 == 'sim'){
			$resultado += 1;
		}else if($r->r3 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		if($r->r4 == 'sim'){
			$resultado += 2;
		}else if($r->r4 == 'nao'){
			$resultado -= 1;
		}else
			$resultado += 0;
		
		if($r->r5 == 'sim'){
			$resultado -= 1;
		}else if($r->r5 == 'nao'){
			$resultado += 2;
		}else
			$resultado += 0;
		
		if($r->r6 == 'sim'){
			$resultado -= 1;
		}else if($r->r6 == 'nao'){
			$resultado += 1;
		}else
			$resultado += 0;
		
		if($r->r7 == 'sim'){
			$resultado += 1;
		}else if($r->r7 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		if($r->r8 == 'sim'){
			$resultado += 1;
		}else if($r->r8 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		if($r->r9 == 'sim'){
			$resultado += 1;
		}else if($r->r9 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		if($r->r10 == 'sim'){
			$resultado += 1;
		}else if($r->r10 == 'nao'){
			$resultado += 0;
		}else
			$resultado += 0;
		
		$r['resultado'] = $this->classificador($resultado);
		return $r;
	}
	
	public function classificador($resultado){
		if($resultado < 1){
			return 'Duvidosa';
		}
		else if($resultado < 5) {
			return 'Possível';
		}
		else if($resultado < 9) {
			return 'Provável';
		}
		else {
			return 'Definida';
		}
	}
}
