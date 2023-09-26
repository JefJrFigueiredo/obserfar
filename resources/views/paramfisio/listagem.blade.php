@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O Parametro Fisiologico {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($paramfisios))
		<div class="alert alert-danger">
			Você não tem nenhum Parametro Fisiologico cadastrado.
		</div>
	@endif
	
	<h1>Listagem de Parâmetros Fisiológicos</h1>
	<h3>Paciente: {{ $paciente->nome }}</h3>
	
	<a href="{{action('ParamFisioController@novo', $paciente->id)}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>Valor</strong></td>
			<td><strong>Criado</strong></td>
			<td><strong>Atualizado</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($paramfisios as $p)
			<tr>
				<td>{{ $p->nome }} </td>
				<td>{{ $p->valor }} </td>
				<td>{{ $p->created_at->sub(new DateInterval('PT3H')) }} </td>
				<td>{{ $p->updated_at->sub(new DateInterval('PT3H')) }} </td>
				<td>
					<a href="/paramfisios/mostra/{{ $p->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('ParamFisioController@edita', $p->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('ParamFisioController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop