@extends('layouts.app')

@section('content')

	@if(old('adesaoaotratamento'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O teste de adesão ao tratamento {{ old('adesaoaotratamento') }} foi salvo!
		</div>
	@endif

	@if(empty($adesaotratamentoVariavel))
		<div class="alert alert-danger">
			Você não tem nenhum teste de adesão ao tratamento cadastrado.
		</div>
	@endif
	
	<h1>Listagem de Adesão Ao Tratamento</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Questão 01</strong></td>
			<td><strong>Questão 02</strong></td>
			<td><strong>Questão 03</strong></td>
			<td><strong>Questão 04</strong></td>
			<td><strong>Questão 05</strong></td>
			<td><strong>Questão 06</strong></td>
			<td><strong>Questão 07</strong></td>
			<td><strong>Questão 08</strong></td>
			<td><strong>Adesão ao Tratamento?</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($adesaotratamentoVariavel as $p)
			<tr>
				<td>{{ $p->r1 }} </td>
				<td>{{ $p->r2 }} </td>
				<td>{{ $p->r3 }} </td>
				<td>{{ $p->r4 }} </td>
				<td>{{ $p->r5 }} </td>
				<td>{{ $p->r6 }} </td>
				<td>{{ $p->r7 }} </td>
				<td>{{ $p->r8 }} </td>
				<td>{{ $p->adesaoaotratamento }} </td>
				
				<td>
					<a href="/adesaotratamentos/mostra/{{ $p->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('AdesaoTratamentoController@edita', $p->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('AdesaoTratamentoController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	
		<tr>
			<td colspan="18">
				<a href="{{action('AdesaoTratamentoController@novo')}}">
					<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo
				</a>
			</td>
		</tr>
	</table>
	
@stop