@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O paciente {{ old('nome') }} foi salvo!
		</div>
	@endif

	@if(empty($pacientes))
		<div class="alert alert-danger">
			Você não tem nenhum paciente cadastrado.
		</div>
	@endif
	
	<h1>Listagem de pacientes</h1>
	<a href="{{action('PacienteController@novo')}}">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo paciente
	</a>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>Nome</strong></td>
			<td><strong>RG</strong></td>
			<td><strong>Criado em</strong></td>
			<td><strong>Atualizado em</strong></td>
			<td colspan="3"><strong>Gerenciar Paciente</strong></td>
			<td colspan="3"><strong>Consulta</strong></td>
			<td colspan="2"><strong>Parâmetros Fisiológicos</strong></td>
		</tr> 
		@foreach ($pacientes as $p)
			<tr>
				<td>{{ $p->nome }} </td>
				<td>{{ $p->rg }} </td>
				<td>{{ $p->created_at->sub(new DateInterval('PT3H')) }} </td>
				<td>{{ $p->updated_at->sub(new DateInterval('PT3H')) }} </td>
				<td>
					<a href="/pacientes/mostra/{{ $p->id }}">
						<span class="glyphicon glyphicon-search"></span> Visualizar
					</a>
				</td>
				<td>
					<a href="{{action('PacienteController@edita', $p->id)}}">
						<span class="glyphicon glyphicon-edit"></span> Editar
					</a>
				</td>
				<td>
					<a href="{{action('PacienteController@remove', $p->id)}}">
						<span class="glyphicon glyphicon-trash"></span> Remover
					</a>
				</td>
				<td>
					<a href="/consultas/{{ $p->id }}">
						<i class="fa fa-btn fa-list"></i>Visualizar consultas
					</a>
				</td>
				<td>
					<a href="/consultas/novo/{{ $p->id }}">
						<i class="fa fa-btn fa-plus-circle"></i>Nova consulta
					</a>
				</td>
				<td>
					<a href="/consultas/prontuario/{{ $p->id }}">
						<i class="fa fa-btn fa-list"></i>Visualizar prontuário
					</a>
				</td>
				<td>
					<a href="/paramfisios/{{ $p->id }}">
						<i class="fa fa-btn fa-list"></i>Visualizar parâmetros
					</a>
				</td>
				<td>
					<a href="/paramfisios/novo/{{ $p->id }}">
						<i class="fa fa-btn fa-plus-circle"></i>Novo parâmetro
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop