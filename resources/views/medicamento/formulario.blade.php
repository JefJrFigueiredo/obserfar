@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($m) ? 'Cadastrar medicamento' : 'Editar medicamento'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($m) ? '/medicamentos/novo' : '/medicamentos/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($m))
							<input type="hidden" name="id" value="{{{ $m->id }}}" />
						@endif

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome"  
								value="{{ (!empty($m) and empty(old())) ? $m->nome : old('nome') }}">

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('principio') ? ' has-error' : '' }}">
                            <label for="principio" class="col-md-4 control-label">Princípio Ativo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="principio"  
								value="{{ (!empty($m) and empty(old())) ? $m->principio : old('principio') }}">

                                @if ($errors->has('principio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('principio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lab') ? ' has-error' : '' }}">
                            <label for="lab" class="col-md-4 control-label">Laboratório</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lab"  
								value="{{ (!empty($m) and empty(old())) ? $m->lab : old('lab') }}">

                                @if ($errors->has('lab'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lab') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Salvar
                                </button>
                            </div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection