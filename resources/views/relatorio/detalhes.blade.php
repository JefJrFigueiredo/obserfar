@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do Parâmetro Fisiológico: {{ $p->nome }} </h1>
		<ul>
			<li>
				<b>Valor:</b> {{ $p->valor }}
			</li>
			
			
		</ul>
	</div>
@stop