@extends('layouts.app')

@section('content')
	<div class="card-columns">
		<div class="item" data-ng-repeat="question in questions | filter : search">
			<div class="card card-inverse" style="background-color: #333; border-color: #333;">
				<div class="card-block">
					<h4 class="card-title">{[{ question.title | limitTo : 120 }]}</h4>
					<p class="card-text">
						Dificuldade: 
						<span ng-repeat="n in [1,2,3,4,5]">
							<i class="fa fa-star" ng-if="question.difficulty >= n" aria-hidden="true"></i>
							<i class="fa fa-star-o" ng-if="question.difficulty < n" aria-hidden="true"></i>
						</span>
					</p>
					<p class="card-text">
						<span ng-repeat="tag in question.tags" class="tag tag-default" style="margin-right:3px"> {[{ tag.text }]} </span>
					</p>
					<button class="btn btn-secondary " ng-click="show(question.id)" data-toggle="modal" data-target="#showQuestion">Detalhes</button>
			        <button class="btn btn-secondary " ng-click="edit(question.id)" data-toggle="modal" data-target="#editQuestion">Editar</button>
				</div>
			</div>
		</div>
	</div>
@stop
