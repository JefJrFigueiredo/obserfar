@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($q) ? 'Cadastrar qualidade de vida' : 'Editar qualidade de vida'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($q) ? '/qualidadevidas/novo' : '/qualidadevidas/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($q))
							<input type="hidden" name="id" value="{{ $q->id }}" />
						@endif
						
						<strong>Instruções</strong><br><br>
							<p align="justify" >Este questionário é sobre como você se sente a respeito de sua qualidade de vida, saúde e outras áreas de sua vida. <strong>Por favor responda a todas as questões.</strong> Se você não tem certeza sobre que resposta dar em uma questão, por favor, escolha entre as alternativas a que lhe parece mais apropriada. Esta, muitas vezes, poderá ser sua primeira escolha. Por favor, tenha em mente seus valores, aspirações, prazeres e preocupações. Nós estamos perguntando o que você acha de sua vida, tomando como como referência as <strong>duas últimas semanas.</strong><br><br>
						
						<div class="form-group{{ $errors->has('r1') ? ' has-error' : '' }}">
							<label for="r1" class="col-md-4 control-label">1) Como você avaliaria sua qualidade de vida?</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r1" option="{{ old('r1') }}">
									{{
										$r1 = (!empty($q) and empty(old())) ? $q->r1 : old('r1')
									}}
									<option></option>
									<option value="1" {{ ($r1=='1') ? 'selected' : '' }}>1. Muito ruim</option>
									<option value="2" {{ ($r1=='2') ? 'selected' : '' }}>2. Ruim</option>
									<option value="3" {{ ($r1=='3') ? 'selected' : '' }}>3. Nem ruim, nem boa</option>
									<option value="4" {{ ($r1=='4') ? 'selected' : '' }}>4. Boa</option>
									<option value="5" {{ ($r1=='5') ? 'selected' : '' }}>5. Muito boa</option>
								</select>
								@if ($errors->has('r1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r1') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r2') ? ' has-error' : '' }}">
							<label for="r2" class="col-md-4 control-label">
								2) Quão satisfeito(a) você está com a sua saúde?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r2" option="{{ old('r2') }}">
									{{
										$r2 = (!empty($q) and empty(old())) ? $q->r2 : old('r2')
									}}
									<option></option>
									<option value="1" {{ ($r2=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r2=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r2=='3') ? 'selected' : '' }}>3. Nem satisfeito, nem insatisfeito</option>
									<option value="4" {{ ($r2=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r2=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r2') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						As questões seguintes são sobre <strong>o quanto</strong> você tem sentido algumas coisas nas últimas duas semanas.<br><br>

                        <div class="form-group{{ $errors->has('r3') ? ' has-error' : '' }}">
							<label for="r3" class="col-md-4 control-label">
								3) Em que medida você acha que sua dor (física) impede você de fazer o que você precisa?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r3" option="{{ old('r3') }}">
									{{
										$r3 = (!empty($q) and empty(old())) ? $q->r3 : old('r3')
									}}
									<option></option>
									<option value="1" {{ ($r3=='1') ? 'selected' : '' }}>1. Extremamente</option>
									<option value="2" {{ ($r3=='2') ? 'selected' : '' }}>2. Bastante</option>
									<option value="3" {{ ($r3=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r3=='4') ? 'selected' : '' }}>4. Muito pouco</option>
									<option value="5" {{ ($r3=='5') ? 'selected' : '' }}>5. Nada</option>
								</select>
								@if ($errors->has('r3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r3') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r4') ? ' has-error' : '' }}">
							<label for="r4" class="col-md-4 control-label">
								4) O quanto você precisa de algum tratamento médico para levar sua vida diária?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r4" option="{{ old('r4') }}">
									{{
										$r4 = (!empty($q) and empty(old())) ? $q->r4 : old('r4')
									}}
									<option></option>
									<option value="1" {{ ($r4=='1') ? 'selected' : '' }}>1. Extremamente</option>
									<option value="2" {{ ($r4=='2') ? 'selected' : '' }}>2. Bastante</option>
									<option value="3" {{ ($r4=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r4=='4') ? 'selected' : '' }}>4. Muito pouco</option>
									<option value="5" {{ ($r4=='5') ? 'selected' : '' }}>5. Nada</option>
								</select>
								@if ($errors->has('r4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r4') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r5') ? ' has-error' : '' }}">
							<label for="r5" class="col-md-4 control-label">
								5) O quanto você aproveita a vida?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r5" option="{{ old('r5') }}">
									{{
										$r5 = (!empty($q) and empty(old())) ? $q->r5 : old('r5')
									}}
									<option></option>
									<option value="1" {{ ($r5=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r5=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r5=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r5=='4') ? 'selected' : '' }}>4. Bastante</option>
									<option value="5" {{ ($r5=='5') ? 'selected' : '' }}>5. Extremamente</option>
								</select>
								@if ($errors->has('r5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r5') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r6') ? ' has-error' : '' }}">
							<label for="r6" class="col-md-4 control-label">
								6) Em que medida você acha que asua vida tem sentido?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r6" option="{{ old('r6') }}">
									{{
										$r6 = (!empty($q) and empty(old())) ? $q->r6 : old('r6')
									}}
									<option></option>
									<option value="1" {{ ($r6=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r6=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r6=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r6=='4') ? 'selected' : '' }}>4. Bastante</option>
									<option value="5" {{ ($r6=='5') ? 'selected' : '' }}>5. Extremamente</option>
								</select>
								@if ($errors->has('r6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r6') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r7') ? ' has-error' : '' }}">
							<label for="r7" class="col-md-4 control-label">
								7) O quanto você consegue se concentrar?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r7" option="{{ old('r7') }}">
									{{
										$r7 = (!empty($q) and empty(old())) ? $q->r7 : old('r7')
									}}
									<option></option>
									<option value="1" {{ ($r7=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r7=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r7=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r7=='4') ? 'selected' : '' }}>4. Bastante</option>
									<option value="5" {{ ($r7=='5') ? 'selected' : '' }}>5. Extremamente</option>
								</select>
								@if ($errors->has('r7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r7') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r8') ? ' has-error' : '' }}">
							<label for="r8" class="col-md-4 control-label">
								8) Quão seguro(a) você se sente em sua vida diária?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r8" option="{{ old('r8') }}">
									{{
										$r8 = (!empty($q) and empty(old())) ? $q->r8 : old('r8')
									}}
									<option></option>
									<option value="1" {{ ($r8=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r8=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r8=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r8=='4') ? 'selected' : '' }}>4. Bastante</option>
									<option value="5" {{ ($r8=='5') ? 'selected' : '' }}>5. Extremamente</option><br>
								</select>
								@if ($errors->has('r8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r8') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r9') ? ' has-error' : '' }}">
							<label for="r9" class="col-md-4 control-label">
								9) Quão saudável é o seu ambiente físico (clima, barulho, poluição, atrativos)?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r9" option="{{ old('r9') }}">
									{{
										$r9 = (!empty($q) and empty(old())) ? $q->r9 : old('r9')
									}}
									<option></option>
									<option value="1" {{ ($r9=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r9=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r9=='3') ? 'selected' : '' }}>3. Mais ou menos</option>
									<option value="4" {{ ($r9=='4') ? 'selected' : '' }}>4. Bastante</option>
									<option value="5" {{ ($r9=='5') ? 'selected' : '' }}>5. Extremamente</option>
								</select>
								@if ($errors->has('r9'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r9') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						As questões seguintes perguntam sobre <strong>quão completamente</strong> você tem sentido ou é capaz de fazer certas coisas nestas últimas duas semanas.<br><br>

                        <div class="form-group{{ $errors->has('r10') ? ' has-error' : '' }}">
							<label for="r10" class="col-md-4 control-label">
								10) Você tem energia suficiente para seu dia-a-dia?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r10" option="{{ old('r10') }}">
									{{
										$r10 = (!empty($q) and empty(old())) ? $q->r10 : old('r10')
									}}
									<option></option>
									<option value="1" {{ ($r10=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r10=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r10=='3') ? 'selected' : '' }}>3. Médio</option>
									<option value="4" {{ ($r10=='4') ? 'selected' : '' }}>4. Muito</option>
									<option value="5" {{ ($r10=='5') ? 'selected' : '' }}>5. Completamente</option>
								</select>
								@if ($errors->has('r10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r10') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r11') ? ' has-error' : '' }}">
							<label for="r11" class="col-md-4 control-label">
								11) Você é capaz de aceitar sua aparência física?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r11" option="{{ old('r11') }}">
									{{
										$r11 = (!empty($q) and empty(old())) ? $q->r11 : old('r11')
									}}
									<option></option>
									<option value="1" {{ ($r11=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r11=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r11=='3') ? 'selected' : '' }}>3. Médio</option>
									<option value="4" {{ ($r11=='4') ? 'selected' : '' }}>4. Muito</option>
									<option value="5" {{ ($r11=='5') ? 'selected' : '' }}>5. Completamente</option>
								</select>
								@if ($errors->has('r11'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r11') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r12') ? ' has-error' : '' }}">
							<label for="r12" class="col-md-4 control-label">
								12) Você tem dinheiro suficiente para satisfazer suas necessidades?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r12" option="{{ old('r12') }}">
									{{
										$r12 = (!empty($q) and empty(old())) ? $q->r12 : old('r12')
									}}
									<option></option>
									<option value="1" {{ ($r12=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r12=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r12=='3') ? 'selected' : '' }}>3. Médio</option>
									<option value="4" {{ ($r12=='4') ? 'selected' : '' }}>4. Muito</option>
									<option value="5" {{ ($r12=='5') ? 'selected' : '' }}>5. Completamente</option>
								</select>
								@if ($errors->has('r12'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r12') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r13') ? ' has-error' : '' }}">
							<label for="r13" class="col-md-4 control-label">
								13) Quão disponíveis para você estão as informações que precisa no seu dia-a-dia?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r13" option="{{ old('r13') }}">
									{{
										$r13 = (!empty($q) and empty(old())) ? $q->r13 : old('r13')
									}}
									<option></option>
									<option value="1" {{ ($r13=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r13=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r13=='3') ? 'selected' : '' }}>3. Médio</option>
									<option value="4" {{ ($r13=='4') ? 'selected' : '' }}>4. Muito</option>
									<option value="5" {{ ($r13=='5') ? 'selected' : '' }}>5. Completamente</option>
								</select>
								@if ($errors->has('r13'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r13') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r14') ? ' has-error' : '' }}">
							<label for="r14" class="col-md-4 control-label">
								14) Em que medida você tem oportunidades de atividade de lazer?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r14" option="{{ old('r14') }}">
									{{
										$r14 = (!empty($q) and empty(old())) ? $q->r14 : old('r14')
									}}
									<option></option>
									<option value="1" {{ ($r14=='1') ? 'selected' : '' }}>1. Nada</option>
									<option value="2" {{ ($r14=='2') ? 'selected' : '' }}>2. Muito pouco</option>
									<option value="3" {{ ($r14=='3') ? 'selected' : '' }}>3. Médio</option>
									<option value="4" {{ ($r14=='4') ? 'selected' : '' }}>4. Muito</option>
									<option value="5" {{ ($r14=='5') ? 'selected' : '' }}>5. Completamente</option>
								</select>
								@if ($errors->has('r14'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r14') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						As questões seguintes perguntam sobre <strong>quão bem ou satisfeito</strong> você se sentiu a respeito de vários aspectos de sua vida nas últimas duas semanas.<br><br>

                        <div class="form-group{{ $errors->has('r15') ? ' has-error' : '' }}">
							<label for="r15" class="col-md-4 control-label">
								15) Quão bem você é capaz de se locomover?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r15" option="{{ old('r15') }}">
									{{
										$r15 = (!empty($q) and empty(old())) ? $q->r15 : old('r15')
									}}
									<option></option>
									<option value="1" {{ ($r15=='1') ? 'selected' : '' }}>1. Muito ruim</option>
									<option value="2" {{ ($r15=='2') ? 'selected' : '' }}>2. Ruim</option>
									<option value="3" {{ ($r15=='3') ? 'selected' : '' }}>3. Nem ruim nem bom</option>
									<option value="4" {{ ($r15=='4') ? 'selected' : '' }}>4. Bom</option>
									<option value="5" {{ ($r15=='5') ? 'selected' : '' }}>5. Muito bom</option>
								</select>
								@if ($errors->has('r15'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r15') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

                        <div class="form-group{{ $errors->has('r16') ? ' has-error' : '' }}">
							<label for="r16" class="col-md-4 control-label">
								16) Quão satisfeito(a) você está com o seu sono?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r16" option="{{ old('r16') }}">
									{{
										$r16 = (!empty($q) and empty(old())) ? $q->r16 : old('r16')
									}}
									<option></option>
									<option value="1" {{ ($r16=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r16=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r16=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r16=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r16=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r16'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r16') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r17') ? ' has-error' : '' }}">
							<label for="r17" class="col-md-4 control-label">
								17) Quão satisfeito(a) você está com sua capacidade de desempenhar as atividades do seu dia-a-dia?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r17" option="{{ old('r17') }}">
									{{
										$r17 = (!empty($q) and empty(old())) ? $q->r17 : old('r17')
									}}
									<option></option>
									<option value="1" {{ ($r17=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r17=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r17=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r17=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r17=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r17'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r17') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('r18') ? ' has-error' : '' }}">
							<label for="r18" class="col-md-4 control-label">
								18) Quão satisfeito(a) você está com sua capacidade para o trabalho?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r18" option="{{ old('r18') }}">
									{{
										$r18 = (!empty($q) and empty(old())) ? $q->r18 : old('r18')
									}}
									<option></option>
									<option value="1" {{ ($r18=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r18=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r18=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r18=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r18=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r18'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r18') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r19') ? ' has-error' : '' }}">
							<label for="r19" class="col-md-4 control-label">
								19) Quão satisfeito(a) você está consigo mesmo?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r19" option="{{ old('r19') }}">
									{{
										$r19 = (!empty($q) and empty(old())) ? $q->r19 : old('r19')
									}}
									<option></option>
									<option value="1" {{ ($r19=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r19=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r19=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r19=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r19=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r19'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r19') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r20') ? ' has-error' : '' }}">
							<label for="r20" class="col-md-4 control-label">
								20) Quão satisfeito(a) você está com suas relações pessoais (amigos, parentes, conhecidos, colegas)?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r20" option="{{ old('r20') }}">
									{{
										$r20 = (!empty($q) and empty(old())) ? $q->r20 : old('r20')
									}}
									<option></option>
									<option value="1" {{ ($r20=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r20=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r20=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r20=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r20=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r20'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r20') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r21') ? ' has-error' : '' }}">
							<label for="r21" class="col-md-4 control-label">
								21) Quão satisfeito(a) você está com sua vida sexual?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r21" option="{{ old('r21') }}">
									{{
										$r21 = (!empty($q) and empty(old())) ? $q->r21 : old('r21')
									}}
									<option></option>
									<option value="1" {{ ($r21=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r21=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r21=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r21=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r21=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r21'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r21') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r22') ? ' has-error' : '' }}">
							<label for="r22" class="col-md-4 control-label">
								22) Quão satisfeito(a) você está com o apoio que você recebe de seus amigos?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r22" option="{{ old('r22') }}">
									{{
										$r22 = (!empty($q) and empty(old())) ? $q->r22 : old('r22')
									}}
									<option></option>
									<option value="1" {{ ($r22=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r22=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r22=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r22=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r22=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r22') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('r23') ? ' has-error' : '' }}">
							<label for="r23" class="col-md-4 control-label">
								23) Quão satisfeito(a) você está com as condições do local onde mora?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r23" option="{{ old('r23') }}">
									{{
										$r23 = (!empty($q) and empty(old())) ? $q->r23 : old('r23')
									}}
									<option></option>
									<option value="1" {{ ($r23=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r23=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r23=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r23=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r23=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r23'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r23') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r24') ? ' has-error' : '' }}">
							<label for="r24" class="col-md-4 control-label">
								24) Quão satisfeito(a) você está com o seu acesso aos serviços de saúde?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r24" option="{{ old('r24') }}">
									{{
										$r24 = (!empty($q) and empty(old())) ? $q->r24 : old('r24')
									}}
									<option></option>
									<option value="1" {{ ($r24=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r24=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r24=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r24=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r24=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r24'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r24') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
								
						<div class="form-group{{ $errors->has('r25') ? ' has-error' : '' }}">
							<label for="r25" class="col-md-4 control-label">
								25) Quão satisfeito(a) você está com o seu meio de transporte?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r25" option="{{ old('r25') }}">
									{{
										$r25 = (!empty($q) and empty(old())) ? $q->r25 : old('r25')
									}}
									<option></option>
									<option value="1" {{ ($r25=='1') ? 'selected' : '' }}>1. Muito insatisfeito</option>
									<option value="2" {{ ($r25=='2') ? 'selected' : '' }}>2. Insatisfeito</option>
									<option value="3" {{ ($r25=='3') ? 'selected' : '' }}>3. Nem satisfeito nem insatisfeito</option>
									<option value="4" {{ ($r25=='4') ? 'selected' : '' }}>4. Satisfeito</option>
									<option value="5" {{ ($r25=='5') ? 'selected' : '' }}>5. Muito satisfeito</option>
								</select>
								@if ($errors->has('r25'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r25') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						As questões seguintes referem-se a <strong>com que freqüência</strong> você sentiu ou experimentou certas coisas nas últimas duas semanas.<br><br>

                        <div class="form-group{{ $errors->has('r26') ? ' has-error' : '' }}">
							<label for="r26" class="col-md-4 control-label">
								26) Com que frequência você tem sentimentos negativos tais como mau humor, desespero, ansiedade, depressão?
							</label>
							<div class="col-md-6">
								<select type="text" class="form-control" name="r26" option="{{ old('r26') }}">
									{{
										$r26 = (!empty($q) and empty(old())) ? $q->r26 : old('r26')
									}}
									<option></option>
									<option value="1" {{ ($r26=='1') ? 'selected' : '' }}>1. Sempre</option>
									<option value="2" {{ ($r26=='2') ? 'selected' : '' }}>2. Muito frequentemente</option>
									<option value="3" {{ ($r26=='3') ? 'selected' : '' }}>3. Frequentemente</option>
									<option value="4" {{ ($r26=='4') ? 'selected' : '' }}>4. Algumas vezes</option>
									<option value="5" {{ ($r26=='5') ? 'selected' : '' }}>5. Nunca</option>
								</select>
								@if ($errors->has('r26'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('r26') }}</strong>
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