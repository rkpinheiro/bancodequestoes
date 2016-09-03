@extends('layouts.app')

@section('content')
	<div class="card-columns">
		<div class="item" data-ng-repeat="question in questions">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">{[{ question.title }]}</h4>
					<div>
						<p>
							<span class="tag tag-danger">Análise de sistemas</span>
							<span class="tag tag-danger">POO</span>
							<span class="tag tag-danger">Algorítmos 1</span>
							<span class="tag tag-danger">Algorítmos 2</span>
							<span class="tag tag-danger">Análise de sistemas</span>
							<span class="tag tag-danger">POO</span>
							<span class="tag tag-danger">Algorítmos 1</span>
							<span class="tag tag-danger">Algorítmos 2</span>
							<span class="tag tag-danger">Análise de sistemas</span>
							<span class="tag tag-danger">POO</span>
							<span class="tag tag-danger">Algorítmos 1</span>
							<span class="tag tag-danger">Algorítmos 2</span>
						</p>
					</div>
					<div>
						<span>Dificuldade: </span>
						<button class="btn btn-secondary pull-sm-right" ng-click="get(question.id)" data-toggle="modal" data-target="#editQuestion">Editar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials._new_question')
	@include('partials._edit_question')

@stop
