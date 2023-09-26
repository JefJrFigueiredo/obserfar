@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($p) ? 'Fase de Avaliação' : 'Editar Fase de Avaliação'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/pacientes/novo' : '/pacientes/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($p))
							<input type="hidden" name="id" value="{{{ $p->id }}}" />
						@endif

                        
						
						<div class="form-group{{ $errors->has('pergunta1') ? ' has-error' : '' }}">
							<label for="pergunta1" class="col-md-4 control-label">O PACIENTE NECESSITA DO MEDICAMENTO?</label>
							<div class="col-md-6">
								<select type="boolean" class="form-control" name="pergunta1" option="{{ old('pergunta1') }}">
									{{
										$pergunta1 = (!empty($p) and empty(old())) ? $p->pergunta1 : old('pergunta1')
									}}
									<option></option>
									<option value="sim" {{ ($pergunta1=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($pergunta1=='nao') ? 'selected' : '' }}>Não</option>
								</select>
								@if ($errors->has('pergunta1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pergunta1') }}</strong>
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