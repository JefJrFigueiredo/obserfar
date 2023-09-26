@extends('layouts.app')

@section('content')
	<div>
		<h1>Detalhes do PRM</h1>
		<ul>
			<li>
				<b>TIPO DE PRM:</b> {{ $p->tipoPRM }}
			</li>
			
		</ul>
	</div>
@stop