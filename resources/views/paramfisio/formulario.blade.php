@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($p) ? 'Cadastrar Parâmetro Fisiológico' : 'Editar Parâmetro Fisiológico'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/paramfisios/novo' : '/paramfisios/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($p))
							<input type="hidden" name="id" value="{{ $p->id }}" />
							<input type="hidden" name="paciente" value="{{ $p->paciente }}" />
						@else
							<input type="hidden" name="paciente" value="{{ $paciente }}" />
						@endif
						

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
							<label for="nome" class="col-md-4 control-label">Parâmetro Fisiológico</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="nome" option="{{ old('nome') }}">
									{{
										$nome = (!empty($p) and empty(old())) ? $p->nome : old('nome')
									}}
									<option></option>
									<option {{ ($nome=='Glicemia') ? 'selected' : '' }}>Glicemia</option>
									<option {{ ($nome=='Pressão arterial') ? 'selected' : '' }}>Pressão arterial</option>
								</select>
								@if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                            <label for="valor" class="col-md-4 control-label">Valor da medição</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="valor" 
								value="{{ (!empty($p) and empty(old())) ? $p->valor : old('valor') }}">

                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valor') }}</strong>
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