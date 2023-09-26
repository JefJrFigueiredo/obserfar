@extends('layouts.app')

@section('content')

	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> A qualidade de vida {{ old('nome') }} foi salva!
		</div>
	@endif

	@if(empty($qualidadevidas))
		<div class="alert alert-danger">
			Você não tem nenhuma qualidade de vida cadastrada.
		</div>
	@endif
	
	<h1>Listagem de qualidade de vida</h1>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<td><strong>ID</strong></td>
			<td><strong>Q1</strong></td>
			<td><strong>Q2</strong></td>
			<td><strong>Q3</strong></td>
			<td><strong>Q4</strong></td>
			<td><strong>Q5</strong></td>
			<td><strong>Q6</strong></td>
			<td><strong>Q7</strong></td>
			<td><strong>Q8</strong></td>
			<td><strong>Q9</strong></td>
			<td><strong>Q10</strong></td>
			<td><strong>Q11</strong></td>
			<td><strong>Q12</strong></td>
			<td><strong>Q13</strong></td>
			<td><strong>Q14</strong></td>
			<td><strong>Q15</strong></td>
			<td><strong>Q16</strong></td>
			<td><strong>Q17</strong></td>
			<td><strong>Q18</strong></td>
			<td><strong>Q19</strong></td>
			<td><strong>Q20</strong></td>
			<td><strong>Q21</strong></td>
			<td><strong>Q22</strong></td>
			<td><strong>Q23</strong></td>
			<td><strong>Q24</strong></td>
			<td><strong>Q25</strong></td>
			<td><strong>Q26</strong></td>
			<td><strong>Dominio Fisico</strong></td>
			<td><strong>Dominio Psicologico</strong></td>
			<td><strong>Dominio Social</strong></td>
			<td><strong>Dominio Ambiente</strong></td>
			<td colspan="3"><strong>Ações</strong></td>
		</tr> 
		@foreach ($qualidadevidas as $q)
			<tr>
				<td>{{ $q->id }} </td>
				<td>{{ $q->r1 }} </td>
				<td>{{ $q->r2 }} </td>
				<td>{{ $q->r3 }} </td>
				<td>{{ $q->r4 }} </td>
				<td>{{ $q->r5 }} </td>
				<td>{{ $q->r6 }} </td>
				<td>{{ $q->r7 }} </td>
				<td>{{ $q->r8 }} </td>
				<td>{{ $q->r9 }} </td>
				<td>{{ $q->r10 }} </td>
				<td>{{ $q->r11 }} </td>
				<td>{{ $q->r12 }} </td>
				<td>{{ $q->r13 }} </td>
				<td>{{ $q->r14 }} </td>
				<td>{{ $q->r15 }} </td>
				<td>{{ $q->r16 }} </td>
				<td>{{ $q->r17 }} </td>
				<td>{{ $q->r18 }} </td>
				<td>{{ $q->r19 }} </td>
				<td>{{ $q->r20 }} </td>
				<td>{{ $q->r21 }} </td>
				<td>{{ $q->r22 }} </td>
				<td>{{ $q->r23 }} </td>
				<td>{{ $q->r24 }} </td>
				<td>{{ $q->r25 }} </td>
				<td>{{ $q->r26 }} </td>
				<td>{{ $q->dom_fisico }} </td>
				<td>{{ $q->dom_psico }} </td>
				<td>{{ $q->dom_social }} </td>
				<td>{{ $q->dom_ambiente }} </td>
				<td>
					<a href="/qualidadevidas/mostra/{{ $q->id }}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>
				<td>
					<a href="{{action('QualidadevidaController@edita', $q->id)}}">
						<span class="glyphicon glyphicon-edit"></span>
					</a>
				</td>
				<td>
					<a href="{{action('QualidadevidaController@remove', $q->id)}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	
@stop