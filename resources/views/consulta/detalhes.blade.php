@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes da consulta: {{ $c->nome }} </h1>
		<ul>
			<li>
				<b>Paciente:</b> {{ $c->paciente }}
			</li>
			<li>
				<b>Farmaceutico:</b> {{ $c->usuario }}
			</li>
			<li>
				<b>Qualidade de Vida:</b>
				<ul>
					<li>
						<b>Dominio Fisico:</b> {{ $c->dom_fisico }} 
					</li>
					<li>
						<b>Dominio Psicologico:</b> {{ $c->dom_psico }} 
					</li>
					<li>
						<b>Dominio Social:</b> {{ $c->dom_social }} 
					</li>
					<li>
						<b>Dominio Meio Ambiente:</b> {{ $c->dom_ambiente }} 
					</li>
				</ul>
			</li>
			<li>
				<b>Adesão ao Tratamento:</b>
				<ul>
					<li>
						<b>Resultado:</b> {{ $c->adesao }} 
					</li>
				</ul>
			</li>
			<li>
				<b>Problemas Relacionados a Medicamentos:</b> {{ $c->prm_resultado }}
			</li>
			<li>
				<b>Reação Adversa a Medicamento:</b>
				<ul>
					<li>
						<b>Medicamento:</b> {{ $c->medicamentosusp }} 
					</li>
					<li>
						<b>Sintomas:</b> {{ $c->sintomas }} 
					</li>
					<li>
						<b>Resultado:</b> {{ $c->resultado }} 
					</li>
				</ul>
			</li>
			<li>
				<b>Realizada em:</b> {{ $c->created_at }}
			</li>
			<li>
				<b>Ultima modificacao:</b> {{ $c->updated_at }}
			</li>
		</ul>
	</div>
@stop