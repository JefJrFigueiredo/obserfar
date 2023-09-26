@extends('layouts.app')

@section('content')

	@if(old('name'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O usuário {{ old('name') }} foi salvo!
		</div>
	@endif

	@if(empty($usuarios))
		<div class="alert alert-danger">
			Você não tem nenhum usuário cadastrado.
		</div>
	@endif
	
	<h1>Listagem de usuários</h1>
	
	<a href="{{'/register'}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo usuário
	</a>
	
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Cargo</strong></td>
			<td><strong>Criado em</strong></td>
			<td><strong>Último login/logout</strong></td>
			<td><strong>Excluir</strong></td>
		</tr> 
		@foreach ($usuarios as $p)
			<tr>
				<td>{{ $p->name }} </td>
				<td>{{ $p->email }} </td>
				<td>{{ $p->cargo }} </td>
				<td>{{ $p->created_at->sub(new DateInterval('PT3H')) }} </td>
				<td>{{ $p->updated_at->sub(new DateInterval('PT3H')) }} </td>
				<td>
					<a href="{{action('UsuarioController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop