@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($p) ? 'Cadastrar paciente' : 'Editar paciente'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/pacientes/novo' : '/pacientes/confirmaEdicao' }}">
					
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
						
						@if(!empty($p))
							<input type="hidden" name="id" value="{{ $p->id }}" />
						@endif

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome"  
								value="{{ (!empty($p) and empty(old())) ? $p->nome : old('nome') }}">

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
							<label for="genero" class="col-md-4 control-label">Gênero</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="genero" option="{{ old('genero') }}">
									{{
										$genero = (!empty($p) and empty(old())) ? $p->genero : old('genero')
									}}
									<option></option>
									<option value="feminino" {{ ($genero=='feminino') ? 'selected' : '' }}>Feminino</option>
									<option value="masculino" {{ ($genero=='masculino') ? 'selected' : '' }}>Masculino</option>
								</select>
								@if ($errors->has('genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('gruporisco') ? ' has-error' : '' }}">
							<label for="gruporisco" class="col-md-4 control-label">Grupo de Risco (opcional)</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="gruporisco" option="{{ old('gruporisco') }}">
									{{
										$gruporisco = (!empty($p) and empty(old())) ? $p->gruporisco : old('gruporisco')
									}}
									<option value="nenhum">Nenhum</option>
									<option value="crianca" {{ ($gruporisco=='crianca') ? 'selected' : '' }}>Criança</option>
									<option value="gestante" {{ ($gruporisco=='gestante') ? 'selected' : '' }}>Gestante</option>
									<option value="idoso" {{ ($gruporisco=='idoso') ? 'selected' : '' }}>Idoso</option>
								</select>
								@if ($errors->has('gruporisco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gruporisco') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('rg') ? ' has-error' : '' }}">
                            <label for="rg" class="col-md-4 control-label">RG</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="rg" 
								value="{{ (!empty($p) and empty(old())) ? $p->rg : old('rg') }}">

                                @if ($errors->has('rg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('nascimento') ? ' has-error' : '' }}">
                            <label for="nascimento" class="col-md-4 control-label">Data de nascimento</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="nascimento" 
								value="{{ (!empty($p) and empty(old())) ? $p->nascimento : old('nascimento') }}">

                                @if ($errors->has('nascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('sus') ? ' has-error' : '' }}">
                            <label for="sus" class="col-md-4 control-label">Cartão SUS</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sus" 
								value="{{ (!empty($p) and empty(old())) ? $p->sus : old('sus') }}">

                                @if ($errors->has('sus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('escolaridade') ? ' has-error' : '' }}">
							<label for="escolaridade" class="col-md-4 control-label">Escolaridade</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="escolaridade" option="{{ old('escolaridade') }}">
									{{
										$escolaridade = (!empty($p) and empty(old())) ? $p->escolaridade : old('escolaridade')
									}}
									<option></option>  
									<option value="nenhum" {{ ($escolaridade=='nenhum') ? 'selected' : '' }}>Nenhum</option>
									<option value="alfabetizado" {{ ($escolaridade=='alfabetizado') ? 'selected' : '' }}>Alfabetizado</option> 
									<option value="fundamental" {{ ($escolaridade=='fundamental') ? 'selected' : '' }}>Ensino Fundamental</option>
									<option value="medio" {{ ($escolaridade=='medio') ? 'selected' : '' }}>Ensino Médio</option>
									<option value="superior" {{ ($escolaridade=='superior') ? 'selected' : '' }}>Ensino Superior</option>
									<option value="pos" {{ ($escolaridade=='pos') ? 'selected' : '' }}>Pós-Graduação</option>
								</select>
								@if ($errors->has('escolaridade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('escolaridade') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('peso') ? ' has-error' : '' }}">
                            <label for="peso" class="col-md-4 control-label">Peso (Kg)</label>

                            <div class="col-md-6">
                                <input type="number" step="any" class="form-control" name="peso" 
								value="{{ (!empty($p) and empty(old())) ? $p->peso : old('peso') }}">

                                @if ($errors->has('peso'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('altura') ? ' has-error' : '' }}">
                            <label for="altura" class="col-md-4 control-label">Altura (m)</label>

                            <div class="col-md-6">
                                <input type="number" step="any" class="form-control" name="altura" 
								value="{{ (!empty($p) and empty(old())) ? $p->altura : old('altura') }}">

                                @if ($errors->has('altura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('altura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('alcool') ? ' has-error' : '' }}">
							<label for="alcool" class="col-md-4 control-label">Consome bebidas alcóolicas</label>
							<div class="col-md-6">
								<select type="boolean" class="form-control" name="alcool" option="{{ old('alcool') }}">
									{{
										$alcool = (!empty($p) and empty(old())) ? $p->alcool : old('alcool')
									}}
									<option></option>
									<option value="nao" {{ ($alcool=='nao') ? 'selected' : '' }}>Não</option>
									<option value="sim" {{ ($alcool=='sim') ? 'selected' : '' }}>Sim</option>
								</select>
								@if ($errors->has('alcool'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alcool') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <label for="telefone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="telefone" 
								value="{{ (!empty($p) and empty(old())) ? $p->telefone : old('telefone') }}">

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('unidade') ? ' has-error' : '' }}">
                            <label for="unidade" class="col-md-4 control-label">Unidade de Saúde</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="unidade" 
								value="{{ (!empty($p) and empty(old())) ? $p->unidade : old('unidade') }}">

                                @if ($errors->has('unidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('tabaco') ? ' has-error' : '' }}">
							<label for="tabaco" class="col-md-4 control-label">Consome cigarro?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="tabaco" option="{{ old('tabaco') }}">
									{{
										$tabaco = (!empty($p) and empty(old())) ? $p->tabaco : old('tabaco')
									}}
									<option></option>
									<option value="ex-fumante" {{ ($tabaco=='ex-fumante') ? 'selected' : '' }}>Ex-fumante</option>
									<option value="nao" {{ ($tabaco=='nao') ? 'selected' : '' }}>Não</option>
									<option value="sim" {{ ($tabaco=='sim') ? 'selected' : '' }}>Sim</option>
								</select>
								@if ($errors->has('tabaco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tabaco') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('atividade_fisica') ? ' has-error' : '' }}">
							<label for="atividade_fisica" class="col-md-4 control-label">Pratica atividades físicas?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="atividade_fisica" option="{{ old('atividade_fisica') }}">
									{{
										$atividade_fisica = (!empty($p) and empty(old())) ? $p->atividade_fisica : old('atividade_fisica')
									}}
									<option></option>
									<option value="nao" {{ ($atividade_fisica=='nao') ? 'selected' : '' }}>Não</option>
									<option value="sim" {{ ($atividade_fisica=='sim') ? 'selected' : '' }}>Sim</option>
								</select>
								@if ($errors->has('atividade_fisica'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('atividade_fisica') }}</strong>
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