@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> A RAM {{ old('nome') }} foi salva!
		</div>
	@endif

	@if(empty($rams))
		<div class="alert alert-danger">
			Você não tem nenhuma RAM cadastrada.
		</div>
	@endif
	
	<a href="{{action('RAMController@novo')}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo RAM
	</a>
	
	<h1>Listagem de RAM</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>ID</strong></td>
			<td><strong>Medicamento Suspeitos</strong></td>
			<td><strong>Sintomas</strong></td>
			<td><strong>Q1</strong></td>
			<td><strong>Q2</strong></td>
			<td><strong>Q3</strong></td>
			<td><strong>Q4</strong></td>
			<td><strong>Q5</strong></td>
			<td><strong>Q6</strong></td>
			<td><strong>Q7</strong></td>
			<td><strong>Q8</strong></td>
			<td><strong>Q9</strong></td>
			<td><strong>Q10</strong></td>
			<td><strong>Resultado</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($rams as $q)
			<tr>
				<td>{{ $q->id }} </td>
				<td>{{ $q->medicamentosusp }} </td>
				<td>{{ $q->sintomas }} </td>
				<td>{{ $q->r1 }} </td>
				<td>{{ $q->r2 }} </td>
				<td>{{ $q->r3 }} </td>
				<td>{{ $q->r4 }} </td>
				<td>{{ $q->r5 }} </td>
				<td>{{ $q->r6 }} </td>
				<td>{{ $q->r7 }} </td>
				<td>{{ $q->r8 }} </td>
				<td>{{ $q->r9 }} </td>
				<td>{{ $q->r10 }} </td>
				<td>{{ $q->resultado }} </td>
				<td>
					<a href="/rams/mostra/{{ $q->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('RAMController@edita', $q->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('RAMController@remove', $q->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop