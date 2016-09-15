@extends('layouts.app')

@section('content')
	<div class="card-columns">
		<div class="item" data-ng-repeat="question in questions | filter : search">
			<div class="card card-inverse" style="background-color: #333; border-color: #333;">
				<div class="card-block">
					<h4 class="card-title">{[{ question.title | limitTo : 120 }]}</h4>
					<p class="card-text">
						<span>Dificuldade: {[{ question.difficulty }]}</span>
						{{-- <span class="tag tag-danger">Análise de sistemas</span> --}}
					</p>
					<button class="btn btn-secondary " ng-click="show(question.id)" data-toggle="modal" data-target="#showQuestion">Detalhes</button>
			        <button class="btn btn-secondary " ng-click="edit(question.id)" data-toggle="modal" data-target="#editQuestion">Editar</button>
				</div>
			</div>
		</div>
	</div>

	@include('partials._new_question')
	@include('partials._edit_question')
	@include('partials._show_question')

@stop
