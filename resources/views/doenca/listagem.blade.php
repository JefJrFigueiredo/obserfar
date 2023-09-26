@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> A doença {{ old('nome') }} foi salva!
		</div>
	@endif

	@if(empty($doencas))
		<div class="alert alert-danger">
			Você não tem nenhuma doença cadastrada.
		</div>
	@endif
	
	<h1>Listagem de doenças</h1>
	<a href="{{action('DoencaController@novo')}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Nova doença
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>CID-10</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($doencas as $d)
			<tr>
				<td>{{ $d->nome }} </td>
				<td>{{ $d->cid10 }} </td>
				<td>
					<a href="/doencas/mostra/{{ $d->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('DoencaController@edita', $d->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('DoencaController@remove', $d->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop