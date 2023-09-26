@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do medicamento</h1>
		<ul>
			<li>
				<b>Nome:</b> {{ $m->nome }}
			</li>
			<li>
				<b>Principio Ativo:</b> {{ $m->principio }}
			</li>
			<li>
				<b>Laboratorio:</b> {{ $m->lab }}
			</li>
		</ul>
	</div>
@stop