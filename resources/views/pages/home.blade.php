@extends('layouts.app')

@section('content')
<div data-ng-app="question" data-ng-controller="QuestionController" data-ng-init='init()'>
	<div class="row" data-ng-repeat="question in questions">
		<div class="item">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="page-header">
							<h2>{[{ question.title }]}</h2>
						</div>
						<div>
							<p>
								<span class="label label-danger">Análise de sistemas</span>
								<span class="label label-danger">POO</span>
								<span class="label label-danger">Algorítmos 1</span>
								<span class="label label-danger">Algorítmos 2</span>
								<span class="label label-danger">Análise de sistemas</span>
								<span class="label label-danger">POO</span>
								<span class="label label-danger">Algorítmos 1</span>
								<span class="label label-danger">Algorítmos 2</span>
								<span class="label label-danger">Análise de sistemas</span>
								<span class="label label-danger">POO</span>
								<span class="label label-danger">Algorítmos 1</span>
								<span class="label label-danger">Algorítmos 2</span>
							</p>
						</div>
						<div>
							<span>Dificuldade: </span>
							<button class="btn btn-default pull-right">Vizualizar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('partials._new_question')

@stop
