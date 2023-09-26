@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar conta</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<!-- Barra de seleção comentada para uso de código PHP, a mesma em uso está logo abaixo
						<?php echo"
							<div class=\"form-group", $errors->has('cargo') ? ' has-error' : '', "\">
								<label for=\"cargo\" class=\"col-md-4 control-label\">Cargo/Função</label>
								<div class=\"col-md-6\">
									<select id=\"cargo\" type=\"text\" class=\"form-control\" name=\"cargo\" option=\"{{ old('cargo') }}\">
										<option></option>
										<option value=\"auxiliar\" ",old('cargo')=='auxiliar' ? 'selected' : '' ," >Auxiliar</option>
										<option value=\"bolsista\" ",old('cargo')=='bolsista' ? 'selected' : '' ," >Bolsista</option>
										<option value=\"especialista\" ",old('cargo')=='especialista' ? 'selected' : '' ," >Especialista</option>
										<option value=\"farmaceutico\" ",old('cargo')=='farmaceutico' ? 'selected' : '' ," >Farmacêutico</option>
										<option value=\"gestor\" ",old('cargo')=='gestor' ? 'selected' : '' ," >Gestor/Administrador</option>
									</select>" ?>
									@if ($errors->has('cargo'))
										<span class="help-block">
											<strong>"{{ $errors->first('cargo') }}"</strong>
										</span>
									@endif
								</div>
							</div>
						-->
						
						<div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
							<label for="cargo" class="col-md-4 control-label">Cargo/Função</label>
							<div class="col-md-6">
								<select id="cargo" type="text" class="form-control" name="cargo" option="{{ old('cargo') }}">
									<option></option>
						<!--		<option value="Auxiliar" {{old('cargo')=='auxiliar' ? 'selected' : '' }} >Auxiliar</option>
									<option value="Bolsista" {{old('cargo')=='bolsista' ? 'selected' : '' }} >Bolsista</option>
									<option value="Especialista" {{old('cargo')=='especialista' ? 'selected' : '' }} >Especialista</option>		-->
									<option value="Farmaceutico" {{old('cargo')=='farmaceutico' ? 'selected' : '' }} >Farmacêutico</option>
						<!--		<option value="Gestor" {{old('cargo')=='gestor' ? 'selected' : '' }} >Gestor/Administrador</option> 		-->
								</select>
								@if ($errors->has('cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Criar conta
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
