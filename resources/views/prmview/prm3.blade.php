@extends('layouts.app')

@section('content')
	
	<h1> Resultado: PRM 3</h1>
	<h2> O paciente apresenta um problema de saúde por uma inefetividade não quantitativa da farmacoterapia.</h2>
	
	<form class="form-horizontal" role="form" method="POST" action="/prms/prm3">
		{{ csrf_field() }}
		
		<input type="hidden" name="tipoPRM" value="PRM 3" />
		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<a href="/prms/novo" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i>Refazer
				</a>
				
				<a href="/prms/pergunta4" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i>Continuar
				</a>
				
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i> Salvar
				</button>
				
			</div>
		</div>
	</form>
		
		
		
					
		

@stop