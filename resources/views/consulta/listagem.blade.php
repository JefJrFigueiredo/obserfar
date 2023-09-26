@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> A consulta {{ old('nome') }} foi salva!
		</div>
	@endif

	@if(empty($consultas))
		<div class="alert alert-danger">
			Você não tem nenhuma consulta cadastrada.
		</div>
	@endif
	
	<h1>Listagem de consultas</h1>
	<h3>Paciente: {{ $paciente->nome }}</h3>
	
	<a href="{{action('ConsultaController@novo', $paciente->id)}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Nova consulta
	</a>
	
	<br><br>
	
	<a href="/consultas/prontuario/{{ $paciente->id }}">
		<i class="fa fa-btn fa-list"></i>Visualizar prontuário
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Farmacêutico</strong></td>
			<td><strong>Realizada em</strong></td>
			<td><strong>Ultima modificação</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($consultas as $c)
			<tr>
				<td>{{ $c->usuario }} </td>
				<td>{{ $c->created_at->sub(new DateInterval('PT3H')) }} </td>
				<td>{{ $c->updated_at->sub(new DateInterval('PT3H')) }} </td>
				<td>
					<a href="/consultas/mostra/{{ $c->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('ConsultaController@edita', $c->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('ConsultaController@remove', $c->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop