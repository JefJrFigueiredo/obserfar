@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($d) ? 'Cadastrar doença' : 'Editar doença'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($d) ? '/doencas/novo' : '/doencas/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($d))
							<input type="hidden" name="id" value="{{{ $d->id }}}" />
						@endif

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome"  
								value="{{ (!empty($d) and empty(old())) ? $d->nome : old('nome') }}">

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cid10') ? ' has-error' : '' }}">
                            <label for="cid10" class="col-md-4 control-label">CID-10</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cid10" maxlength="3" 
								value="{{ (!empty($d) and empty(old())) ? $d->cid10 : old('cid10') }}">

                                @if ($errors->has('cid10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cid10') }}</strong>
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