@extends('layouts.app')

@section('content')
	
	<h1>{{empty($p) ? 'Novo produto' : 'Editar produto'}}</h1>
	<form action="{{ empty($p) ? '/produtos/adiciona' : '/produtos/confirmaEdicao' }}" method="post">
	
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		
		@if(!empty($p))
			<input type="hidden" name="id" value="{{ $p->id }}" />
		@endif
		
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control"
			value="{{ (!empty($p) and empty(old())) ? $p->nome : old('nome') }}">
		</div>
		
		<div class="form-group">
			<label>Descrição</label>
			<input name="descricao" class="form-control"
			value="{{ (!empty($p) and empty(old())) ? $p->descricao : old('descricao') }}">
		</div>
		
		<div class="form-group">
			<label>Valor</label>
			<input name="valor" class="form-control"
			value="{{ (!empty($p) and empty(old())) ? $p->valor : old('valor') }}">
		</div>
		
		<div class="form-group">
			<label>Quantidade</label>
			<input type="number" name="quantidade" class="form-control"
			value="{{ (!empty($p) and empty(old())) ? $p->quantidade : old('quantidade') }}"/>
		</div>
		
		<button type="submit" class="btn btn-primary btn-block">
            <i class="fa fa-btn fa-save"></i> Salvar
        </button>
	</form>
	
@stop