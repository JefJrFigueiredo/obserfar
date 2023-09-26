@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($p) ? 'Cadastrar novo teste de adesão ao tratamento' : 'Editar teste de adesão ao tratamento'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/adesaotratamentos/novo' : '/adesaotratamentos/confirmaEdicao' }}">
                        
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		
						@if(!empty($p))
							<input type="hidden" name="id" value="{{ $p->id }}" />
						@endif

                        <div class="form-group{{ $errors->has('r1') ? ' has-error' : '' }}">
							<label for="r1" class="col-md-7 control-label">
								1 - Muitas pessoas têm algum tipo de problema para tomar seus remédios. Nos últimos 30 dias o(a) Sr(a) teve dificuldades para tomar seus remédios da pressão/diabetes?
							</label>
							<div class="col-md-2">
								<select type="text" class="form-control" name="r1" option="{{ old('r1') }}">
									{{
										$r1 = (!empty($p) and empty(old())) ? $p->r1 : old('r1')
									}}
									<option></option>
									<option value="sim" {{ ($r1=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r1=='nao') ? 'selected' : '' }}>Não</option>
								</select>
								@if ($errors->has('r1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r1') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r2') ? ' has-error' : '' }}">
							<label for="r2" class="col-md-7 control-label">
								2 - Nos últimos sete dias, o(a) Sr(a) não tomou ou tomou a mais pelo menos um comprimido do remédio para (diabetes e/ou pressão)?
							</label>
							<div class="col-md-2">
								<select type="text" class="form-control" name="r2" option="{{ old('r2') }}">
									{{
										$r2 = (!empty($p) and empty(old())) ? $p->r2 : old('r2')
									}}
									<option></option>
									<option value="sim" {{ ($r2=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r2=='nao') ? 'selected' : '' }}>Não</option>
								</select>
								@if ($errors->has('r2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r2') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r3') ? ' has-error' : '' }}">
							<label for="r3" class="col-md-7 control-label" id="r3">
								3 - Nesses dias, quantos comprimidos o(a) Sr(a) deixou de tomar ou tomou a mais?
							</label>
							<div class="col-md-2">
								<select type="text" class="form-control" name="r3" option="{{ old('r3') }}">
									{{
										$r3 = (!empty($p) and empty(old())) ? $p->r3 : old('r3')
									}}
									<option></option>  
									<option value="nenhum" {{ ($r3=='nenhum') ? 'selected' : '' }}>Nenhum</option>
									<option value="1" {{ ($r3=='1') ? 'selected' : '' }}>1</option> 
									<option value="2" {{ ($r3=='2') ? 'selected' : '' }}>2</option>
									<option value="3" {{ ($r3=='3') ? 'selected' : '' }}>3</option>
									<option value="+3" {{ ($r3=='+3') ? 'selected' : '' }}>+3</option>
								</select>
								@if ($errors->has('r3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r3') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r4') ? ' has-error' : '' }}">
							<label for="r4" class="col-md-7 control-label">
								4 - Como estava sua pressão e/ou glicose da última vez que verificou?
							</label>
							<div class="col-md-3">
								<select type="boolean" class="form-control" name="r4" option="{{ old('r4') }}">
									{{
										$r4 = (!empty($p) and empty(old())) ? $p->r4 : old('r4')
									}}
									<option></option>
									<option value="alterado (diabetes)" {{ ($r4=='alterado (diabetes)') ? 'selected' : '' }}>Alterado (diabetes)</option>
									<option value="alterado (pressao)" {{ ($r4=='alterado (pressao)') ? 'selected' : '' }}>Alterado (pressao)</option>
									<option value="ambos normais" {{ ($r4=='ambos normais') ? 'selected' : '' }}>Ambos Normais </option>
									<option value="ambos alterados" {{ ($r4=='ambos alterados') ? 'selected' : '' }}>Ambos Alterados</option>
									
								</select>
								@if ($errors->has('r4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r4') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r5') ? ' has-error' : '' }}">
							<label for="r5" class="col-md-7 control-label">
								5 - Você alguma vez se esqueceu de tomar o remédio?
							</label>
							<div class="col-md-3">
								<select type="boolean" class="form-control" name="r5" option="{{ old('r5') }}">
									{{
										$r5 = (!empty($p) and empty(old())) ? $p->r5 : old('r5')
									}}
									<option></option>
									<option value="sim" {{ ($r5=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r5=='nao') ? 'selected' : '' }}>Não</option>									
								</select>
								@if ($errors->has('r5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r5') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r6') ? ' has-error' : '' }}">
							<label for="r6" class="col-md-7 control-label">
								6 - Você às vezes é descuidado para tomar seu remédio?
							</label>
							<div class="col-md-2">
								<select type="boolean" class="form-control" name="r6" option="{{ old('r6') }}">
									{{
										$r6 = (!empty($p) and empty(old())) ? $p->r6 : old('r6')
									}}
									<option></option>
									<option value="sim" {{ ($r6=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r6=='nao') ? 'selected' : '' }}>Não</option>
								</select>
								@if ($errors->has('r6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r6') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r7') ? ' has-error' : '' }}">
							<label for="r7" class="col-md-7 control-label">
								7 - Quando você se sente melhor, às vezes, você para de tomar seu remédio?
							</label>
							<div class="col-md-2">
								<select type="boolean" class="form-control" name="r7" option="{{ old('r7') }}">
									{{
										$r7 = (!empty($p) and empty(old())) ? $p->r7 : old('r7')
									}}
									<option></option>
									<option value="sim" {{ ($r7=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r7=='nao') ? 'selected' : '' }}>Não</option>									
								</select>
								@if ($errors->has('r7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r7') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r8') ? ' has-error' : '' }}">
							<label for="r8" class="col-md-7 control-label">
								8 -  Às vezes, se você se sente pior quando toma o remédio, você para de tomá-lo?
							</label>
							<div class="col-md-2">
								<select type="boolean" class="form-control" name="r8" option="{{ old('r8') }}" onchange=''>
									{{
										$r8 = (!empty($p) and empty(old())) ? $p->r8 : old('r8')
									}}
									<option></option>
									<option value="sim" {{ ($r8=='sim') ? 'selected' : '' }}>Sim</option>
									<option value="nao" {{ ($r8=='nao') ? 'selected' : '' }}>Não</option>									
								</select>
								@if ($errors->has('r8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r8') }}</strong>
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