@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do paciente</h1>
		<ul>
			<li>
				<b>Medicamento suspeito:</b> {{ $q->medicamentosusp }}
			</li>
			<li>
				<b>Sintomas:</b> {{ $q->sintomas }}
			</li>
			<li>
				<b>R1:</b> {{ $q->r1 }}
			</li>
			
			<li>
				<b>R2:</b> {{ $q->r2 }}
			</li>
			<li>
				<b>R3:</b> {{ $q->r3 }}
			</li>
			<li>
				<b>R4:</b> {{ $q->r4 }}
			</li>
			<li>
				<b>R5:</b> {{ $q->r5 }}
			</li>
			<li>
				<b>R6:</b> {{ $q->r6 }}
			</li>
			<li>
				<b>R7:</b> {{ $q->r7 }}
			</li>
			<li>
				<b>R8:</b> {{ $q->r8 }}
			</li>
			<li>
				<b>R9:</b> {{ $q->r9 }}
			</li>
			<li>
				<b>R10:</b> {{ $q->r10 }}
			</li>
			<li>
				<b>Resultado:</b> {{ $q->resultado }}
			</li>
			
		</ul>
	</div>
@stop