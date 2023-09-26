@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($i) ? 'Cadastrar interação' : 'Editar interação'}} 
					com o medicamento<font size="4"> {{ $medicamento->nome }}</font>
				</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($i) ? '/interacoes/novo' : '/interacoes/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($i))
							<input type="hidden" name="id" value="{{{ $i->id }}}" />
						@endif
						
						<input type="hidden" name="medicamento1" value="{{ $medicamento->id }}" />
						
						<div class="form-group{{ $errors->has('medicamento2') ? ' has-error' : '' }}">
							<label for="medicamento2" class="col-md-4 control-label">Medicamento</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="medicamento2" option="{{ old('medicamento2') }}">
									{{
										$medicamento2 = (!empty($i) and empty(old())) ? $i->medicamento2 : old('medicamento2')
									}}
									<option></option>
									@foreach ($medicamentos as $m)
										<option value="{{ $m->id }}" {{ ($medicamento2== $m['id'] ) ? 'selected' : '' }}>{{ $m->nome }}</option>
									@endforeach
								</select>
								@if ($errors->has('medicamento2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medicamento2') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('interacao') ? ' has-error' : '' }}">
                            <label for="interacao" class="col-md-4 control-label">Interação</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="interacao"  
								value="{{ (!empty($i) and empty(old())) ? $i->interacao : old('interacao') }}">

                                @if ($errors->has('interacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('interacao') }}</strong>
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