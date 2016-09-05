@extends('layouts.app')

@section('content')
	<div class="card-columns">
		<div class="item" data-ng-repeat="question in questions">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">{[{ question.title | limitTo : 120 }]}</h4>
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
						<span>Dificuldade: {[{ question.difficulty }]}</span>
						<div class="btn-group pull-sm-right" role="group" aria-label="Basic example">
							<button class="btn btn-secondary " ng-click="show(question.id)" data-toggle="modal" data-target="#showQuestion">Show</button>
							<button class="btn btn-secondary " ng-click="edit(question.id)" data-toggle="modal" data-target="#editQuestion">Edit</button>
							<button class="btn btn-secondary " ng-click="delete(question.id)" >Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('partials._new_question')
	@include('partials._edit_question')
	@include('partials._show_question')

@stop
