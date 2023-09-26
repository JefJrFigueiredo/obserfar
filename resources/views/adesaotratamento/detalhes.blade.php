@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do paciente</h1>
		<ul>
			<li>
				<b>Nome:</b> {{ $p->nome }}
			</li>
			<li>
				<b>Genero:</b> {{ $p->genero }}
			</li>
			<li>
				<b>RG:</b> {{ $p->rg }}
			</li>
			<li>
				<b>Data de nascimento:</b> {{ $p->nascimento }}
			</li>
			<li>
				<b>Cartao do SUS:</b> {{ $p->sus }}
			</li>
			<li>
				<b>Escolaridade:</b> {{ $p->escolaridade }}
			</li>
			<li>
				<b>Peso(Kg):</b> {{ $p->peso }}
			</li>
			<li>
				<b>Altura(m):</b> {{ $p->altura }}
			</li>
			<li>
				<b>Consome bebida alcoolica:</b> {{ $p->alcool }}
			</li>
			<li>
				<b>Telefone:</b> {{ $p->telefone }}
			</li>
			<li>
				<b>Unidade de saude:</b> {{ $p->unidade }}
			</li>
			<li>
				<b>Tabagista:</b> {{ $p->tabaco }}
			</li>
			<li>
				<b>Atividade Fisica:</b> {{ $p->atividade_fisica }}
			</li>
		</ul>
	</div>
@stop