@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($q) ? 'Cadastrar RAM qVazio' : 'Editar RAM'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($q) ? '/rams/novo' : '/rams/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($q))
							<input type="hidden" name="id" value="{{ $q->id }}" />
						@endif
						
						<strong>Instruções RAM</strong><br><br>
							<p align="justify" >Este questionário é sobre como você se sente a respeito de sua qualidade de vida, saúde e outras áreas de sua vida. <strong>Por favor responda a todas as questões.</strong> Se você não tem certeza sobre que resposta dar em uma questão, por favor, escolha entre as alternativas a que lhe parece mais apropriada. Esta, muitas vezes, poderá ser sua primeira escolha. Por favor, tenha em mente seus valores, aspirações, prazeres e preocupações. Nós estamos perguntando o que você acha de sua vida, tomando como como referência as <strong>duas últimas semanas.</strong><br><br>
						
						
						<div class="form-group{{ $errors->has('medicamentosusp') ? ' has-error' : '' }}">
                            <label for="medicamentosusp" class="col-md-4 control-label">Medicamento Suspeito</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="medicamentosusp"  
								value="{{ (!empty($q) and empty(old())) ? $q->medicamentosusp : old('medicamentosusp') }}">

                                @if ($errors->has('medicamentosusp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('medicamentosusp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('sintomas') ? ' has-error' : '' }}">
                            <label for="sintomas" class="col-md-4 control-label">Sintomas</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sintomas"  
								value="{{ (!empty($q) and empty(old())) ? $q->sintomas : old('sintomas') }}">

                                @if ($errors->has('sintomas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sintomas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('r1') ? ' has-error' : '' }}">
							<label for="r1" class="col-md-4 control-label">1) Existem notificações conclusivas sobre esta reação?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r1" option="{{ old('r1') }}">
									{{
										$r1 = (!empty($q) and empty(old())) ? $q->r1 : old('r1')
									}}
									<option></option>
									<option value="sim" {{ ($r1=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r1=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r1=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r1') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r2') ? ' has-error' : '' }}">
							<label for="r2" class="col-md-4 control-label">2) A reação apareceu após a administração do fármaco?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r2" option="{{ old('r2') }}">
									{{
										$r2 = (!empty($q) and empty(old())) ? $q->r2 : old('r2')
									}}
									<option></option>
									<option value="sim" {{ ($r2=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r2=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r2=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r2') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('r3') ? ' has-error' : '' }}">
							<label for="r3" class="col-md-4 control-label">3) A reação melhorou quando o fármaco foi suspenso?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r3" option="{{ old('r3') }}">
									{{
										$r3 = (!empty($q) and empty(old())) ? $q->r3 : old('r3')
									}}
									<option></option>
									<option value="sim" {{ ($r3=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r3=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r3=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r3') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r4') ? ' has-error' : '' }}">
							<label for="r4" class="col-md-4 control-label">4) A reação reapareceu quando da sua re-aiministração?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r4" option="{{ old('r4') }}">
									{{
										$r4 = (!empty($q) and empty(old())) ? $q->r4 : old('r4')
									}}
									<option></option>
									<option value="sim" {{ ($r4=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r4=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r4=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r4') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r5') ? ' has-error' : '' }}">
							<label for="r5" class="col-md-4 control-label">5) Existem causas alternativas (até mesmo outro fármaco)?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r5" option="{{ old('r5') }}">
									{{
										$r5 = (!empty($q) and empty(old())) ? $q->r5 : old('r5')
									}}
									<option></option>
									<option value="sim" {{ ($r5=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r5=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r5=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r5') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r6') ? ' has-error' : '' }}">
							<label for="r6" class="col-md-4 control-label">6) A reação reaparece com a introdução de um placebo?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r6" option="{{ old('r6') }}">
									{{
										$r6 = (!empty($q) and empty(old())) ? $q->r6 : old('r6')
									}}
									<option></option>
									<option value="sim" {{ ($r6=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r6=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r6=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r6') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r7') ? ' has-error' : '' }}">
							<label for="r7" class="col-md-4 control-label">7) A Concentração plasmática está em nível tóxico?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r7" option="{{ old('r7') }}">
									{{
										$r7 = (!empty($q) and empty(old())) ? $q->r7 : old('r7')
									}}
									<option></option>
									<option value="sim" {{ ($r7=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r7=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r7=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r7') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r8') ? ' has-error' : '' }}">
							<label for="r8" class="col-md-4 control-label">8) A reação aumentou com dose maior ou reduziu com dose menor?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r8" option="{{ old('r8') }}">
									{{
										$r8 = (!empty($q) and empty(old())) ? $q->r8 : old('r8')
									}}
									<option></option>
									<option value="sim" {{ ($r8=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r8=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r8=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r8') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r9') ? ' has-error' : '' }}">
							<label for="r9" class="col-md-4 control-label">9) O paciente já experimentou semelhante reação anteriormente com medicamentos de mesmo fármaco?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r9" option="{{ old('r9') }}">
									{{
										$r9 = (!empty($q) and empty(old())) ? $q->r9 : old('r9')
									}}
									<option></option>
									<option value="sim" {{ ($r9=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r9=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r9=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r9'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r9') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('r10') ? ' has-error' : '' }}">
							<label for="r10" class="col-md-4 control-label">10) A reação foi confirmada por qualquer evidência objetiva?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r10" option="{{ old('r10') }}">
									{{
										$r10 = (!empty($q) and empty(old())) ? $q->r10 : old('r10')
									}}
									<option></option>
									<option value="sim" {{ ($r10=='sim') ? 'selected' : '' }}>1. Sim</option>
									<option value="nao" {{ ($r10=='nao') ? 'selected' : '' }}>2. Não</option>
									<option value="desconhecido" {{ ($r10=='desconhecido') ? 'selected' : '' }}>3. Desconhecido</option>
								</select>
								@if ($errors->has('r10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r10') }}</strong>
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