@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{empty($p) ? 'Fase de Avaliação' : 'Editar Fase de Avaliação'}}</div>
                <div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ empty($p) ? '/prms/prm2' : '/prmview/confirmaEdicao' }}">
                        {{ csrf_field() }}
						
						@if(!empty($p))
							<input type="hidden" name="id" value="{{{ $p->id }}}" />
						@endif

                        <div class="form-group{{ $errors->has('prm') ? ' has-error' : '' }}">
							<label for="prm" class="col-md-9 control-label">É UM PROBLEMA QUANTITATIVO?</label>
							
						</div>
						
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<a href="/prms/prm6" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Sim
								</a>
								
								<a href="/prms/prm5" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Não
								</a>
								
								<a href="{{ action('PRMController@novo') }}" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i>Retornar ao Início
								</a>
								
							</div>
						</div>
						
						
					</form>
						
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection