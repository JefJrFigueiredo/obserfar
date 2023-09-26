@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes da doença</h1>
		<ul>
			<li>
				<b>Nome:</b> {{ $d->nome }}
			</li>
			<li>
				<b>CID-10:</b> {{ $d->cid10 }}
			</li>
		</ul>
	</div>
@stop