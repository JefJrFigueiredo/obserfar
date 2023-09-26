@extends('layouts.app')

@section('content')
	
	<h1> Resultado: PRM 6</h1>
	<h2>  O paciente apresenta um problema de saúde por uma insegurança quantitativa de um medicamento.</h2>
	
	<form class="form-horizontal" role="form" method="POST" action="/prms/prm6">
		{{ csrf_field() }}
		
		<input type="hidden" name="tipoPRM" value="PRM 6" />
		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<a href="/prms/novo" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i>Refazer
				</a>
				
				<a href="/prms/pergunta6" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i>Continuar
				</a>
				
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i> Salvar
				</button>
				
			</div>
		</div>
	</form>
		
		
		
					
		

@stop