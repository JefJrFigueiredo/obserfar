@extends('layouts.app')

@section('content')

	<h1> Resultado: FIM DA AVALIAÇÃO</h1>
	<h2> SUSPEITAS DE REAÇÃO ADVERSA A MEDICAMENTOS.</h2>

	<form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/prms/fimavaliacao' : '/prms/confirmaEdicao' }}">
		{{ csrf_field() }}

		<input type="hidden" name="tipoPRM" value="SUSPEITAS DE PRM" />

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<a href="/prms/novo" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i>Refazer
				</a>

				<button type="submit" class="btn btn-primary">
					<i class="fa fa-btn fa-user"></i> Salvar
				</button>

			</div>
		</div>
	</form>






@stop