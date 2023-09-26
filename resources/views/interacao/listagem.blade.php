@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O interação {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($interacaos))
		<div class="alert alert-danger">
			Você não tem nenhuma interação cadastrado.
		</div>
	@endif
	
	<h1>Listagem de interações</h1>
	<a href="{{action('InteracaoController@novo')}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Nova interação
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>Princípio Ativo</strong></td>
			<td><strong>Laboratório</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($interacaos as $i)
			<tr>
				<td>{{ $i->nome }} </td>
				<td>{{ $i->principio }} </td>
				<td>{{ $i->lab }} </td>
				<td>
					<a href="/interacaos/mostra/{{ $i->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('InteracaoController@edita', $i->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('InteracaoController@remove', $i->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop