@extends('layouts.app')

@section('content')
	
	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O usuário {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($usuarios))
		<div class="alert alert-danger">
			Você não tem nenhum usuário cadastrado.
		</div>
	@else
		<h1>Listagem de usuários</h1>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td><strong>Nome</strong></td>
				<td><strong>Cargo</strong></td>
				<td><strong>E-mail</strong></td>
				<td><strong>Criado em</strong></td>
				<td><strong>Atualizado em</strong></td>
				<td colspan="3"><strong>Ações</strong></td>
			</tr> 
			@foreach ($usuarios as $u)
				<tr>
					<td>{{ $u->name }} </td>
					<td>{{ $u->cargo }} </td>
					<td>{{ $u->email }} </td>
					<td>{{ $u->created_at->sub(new DateInterval('PT3H')) }} </td>
					<td>{{ $u->updated_at->sub(new DateInterval('PT3H')) }} </td>
					<td>
						<a href="/usuarios/mostra/{{ $u->id }}">
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
					<td>
						<a href="{{action('UsuarioController@edita', $u->id)}}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td>
						<a href="{{action('UsuarioController@remove', $u->id)}}">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
				</tr>
			@endforeach
			<tr>
				<td colspan="8">
					<a href="/usuarios/novo">
						<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo
					</a> 
				</td>
			</tr>
		</table>
	
	@endif
	
@stop