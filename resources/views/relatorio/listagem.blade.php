@extends('layouts.app')

@section('content')

	
	
	<h1>Relatórios</h1>
	<table class="table table-striped table-bordered table-hover">
		
		
	
		<tr>
			<td colspan="1">
				<h1>
					<a href="{{action('PacienteController@lista')}}">
						<strong>Paciente</strong>
					</a>
				</h1>
			</td>
			<td colspan="1">
				<h1>
					<a href="{{action('UsuarioController@lista')}}">
						<strong>Usuário</strong>
					</a>
				</h1>
			</td>
			<td colspan="1">
				<h1>
					<a href="{{action('RelatorioController@lista')}}">
						<strong>Relatório</strong>
					</a>
				</h1>
			</td>
			<td colspan="1">
				<h1>
					<a href="{{action('PacienteController@lista')}}">
						<strong>Perfil</strong>
					</a>
				</h1>
			</td>
			<td colspan="1">
				<h1>
					<a href="{{action('PacienteController@lista')}}">
						<strong>Medicamento</strong>
					</a>
				</h1>
			</td>
			<td colspan="1">
				<h1>
					<a href="{{action('PacienteController@lista')}}">
						<strong>Doença</strong>
					</a>
				</h1>
			</td>
		</tr>
	</table>
	
@stop