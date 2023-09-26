@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ empty($c) ? 'Realizar consulta' : 'Editar consulta'}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ empty($c) ? '/consultas/novo' : '/consultas/confirmaEdicao' }}">
                        
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						
						@if(!empty($c))
							<input type="hidden" name="id" value="{{ $c->id }}" />
						@endif
						
						<table class="table table-striped table-bordered table-hover">
							<tr>
								<td>
									<a href="{{ empty($_SESSION['arvores_id']) ? action('AdesaoTratamentoController@novo') : action('AdesaoTratamentoController@edita', $_SESSION['arvores_id']) }}">
										{{ empty($_SESSION['arvores_id']) ? 
										'Avaliar Adesão ao Tratamento' : 
										'Editar Adesão ao Tratamento' }}
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ action('PRMController@novo') }}">
										{{ empty($_SESSION['prm_resultado']) ? 
										'Avaliar Problemas Relacionados a Medicamentos' : 
										'Reavaliar Problemas Relacionados a Medicamentos, resultado: '.$_SESSION['prm_resultado'] }}
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ empty($_SESSION['qualidadevida_id']) ? action('QualidadevidaController@novo') : action('QualidadevidaController@edita', $_SESSION['qualidadevida_id']) }}">
										{{ empty($_SESSION['qualidadevida_id']) ? 
										'Avaliar Qualidade de Vida' : 
										'Editar Qualidade de Vida' }}
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<a href="{{ empty($_SESSION['ram_id']) ? action('RAMController@novo') : action('RAMController@edita', $_SESSION['ram_id']) }}">
										{{ empty($_SESSION['ram_id']) ? 
										'Avaliar Reação Adversa a Medicamentos' : 
										'Editar Reação Adversa a Medicamentos' }}
									</a>
								</td>
							</tr>
						</table>
						
						
						@if(!empty($_SESSION['qualidadevida_id']))
							<input type="hidden" name="qualidadevida_id" value="{{ $_SESSION['qualidadevida_id'] }}" />
						@endif
						
							<!--
							<input type="hidden" name="pictograma_id" value="{{ 1 }}" />
							-->
						
						@if(!empty($_SESSION['arvores_id']))
							<input type="hidden" name="arvores_id" value="{{ $_SESSION['arvores_id'] }}" />
						@endif
						
						@if(!empty($_SESSION['prm_resultado']))
							<input type="hidden" name="prm_resultado" value="{{ $_SESSION['prm_resultado'] }}" />
						@endif
						
						@if(!empty($_SESSION['ram_id']))
							<input type="hidden" name="ram_id" value="{{ $_SESSION['ram_id'] }}" />
						@endif
						
						@if(!empty($_SESSION['qualidadevida_id']) && 
							!empty($_SESSION['arvores_id']) &&
							!empty($_SESSION['prm_resultado']) &&
							!empty($_SESSION['ram_id'])
							)
								
							<input type="hidden" name="paciente" value="{{ $_SESSION['paciente'] }}" />
							
							<input type="hidden" name="usuario" value="{{ $_SESSION['usuario'] }}" />
							
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Finalizar consulta
									</button>
								</div>
							</div>
						@endif
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
	
@stop