@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do Parametro Fisiologico:</h1>
		<ul>
			<li>
				<b>Paciente:</b> {{ $p->paciente }}
			</li>
			<li>
				<b>Parametro:</b> {{ $p->nome }}
			</li>
			<li>
				<b>Valor:</b> {{ $p->valor }}
			</li>
			<li>
				<b>Criado em:</b> {{ $p->created_at }}
			</li>
			<li>
				<b>Alterado em:</b> {{ $p->updated_at }}
			</li>
		</ul>
	</div>
@stop