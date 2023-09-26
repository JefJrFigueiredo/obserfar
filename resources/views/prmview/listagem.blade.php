@extends('layouts.app')

@section('content')

	@if(old('prm'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O paciente {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($prmV))
		<div class="alert alert-danger">
			Você não tem nenhum paciente cadastrado.
		</div>
	@endif
	
	<h1>Listagem de PRM</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>PRM</strong></td>
			
			<td><strong>Criado</strong></td>
			<td><strong>Atualizado</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($prmV as $p)
			<tr>
				<td>{{ $p->tipoPRM }} </td>
				<td>{{ $p->created_at->sub(new DateInterval('PT3H')) }} </td>
				<td>{{ $p->updated_at->sub(new DateInterval('PT3H')) }} </td>
				<td>
					<a href="/prmview/mostra/{{ $p->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('PRMController@edita', $p->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('PRMController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	
		<tr>
			<td colspan="18">
				<a href="{{action('PRMController@novo')}}">
					<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo
				</a>
			</td>
		</tr>
	</table>
	
@stop