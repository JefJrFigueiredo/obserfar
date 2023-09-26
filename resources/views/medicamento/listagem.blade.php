@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O medicamento {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($medicamentos))
		<div class="alert alert-danger">
			Você não tem nenhum medicamento cadastrado.
		</div>
	@endif
	
	<h1>Listagem de medicamentos</h1>
	<a href="{{action('MedicamentoController@novo')}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo medicamento
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>Princípio Ativo</strong></td>
			<td><strong>Laboratório</strong></td>
			<!--
			<td colspan="2"><strong>Gerenciar Interações</strong></td>
			-->
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($medicamentos as $p)
			<tr>
				<td>{{ $p->nome }} </td>
				<td>{{ $p->principio }} </td>
				<td>{{ $p->lab }} </td>
				<!--
				<td>
					<a href="/interacoes/{{ $p->id }}">
						<i class="fa fa-btn fa-list"></i>Visualizar interações
					</a>
				</td>
				<td>
					<a href="/interacoes/novo/{{ $p->id }}">
						<i class="fa fa-btn fa-plus-circle"></i>Nova interação
					</a>
				</td>
				-->
				<td>
					<a href="/medicamentos/mostra/{{ $p->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('MedicamentoController@edita', $p->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('MedicamentoController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop