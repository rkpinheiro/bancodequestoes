angular.module('question', [])
	.config(function($interpolateProvider){
	    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
	});

angular.module('question').controller('QuestionController', function($scope, $http) {

	$scope.questions = [];
	$scope.question = [];

	// initial
	$scope.init = function(){
		$scope.all();
		$scope.question = $scope.instance();
	}

	// edit a questios from db
	$scope.edit = function($id){
		$http.get(root + '/api/questions/' + $id + '/edit')
			.success(function(data){
				$scope.question = data;
			})
			.error(function(error){
				console.log('Questão não encontrada');
			});
	}

	//get all questions from db
	$scope.all = function(){
		$http.get(root + '/api/questions' )
			.success(function(data){
				$scope.questions = data;
			})
			.error(function(error){
				console.log('Não foi possível encontrar as questões cadastradas.');
			});
	}

	//save new record in db
	$scope.save = function(){
		$http.post(root + '/api/questions', $scope.question)
			.success(function(data){
				$scope.all();
				$('#newQuestion').modal('hide');
			})
			.error(function(error){
				console.log('Error ao adicionar');
			});
	}

	// update a record in db
	$scope.update = function($id){
		$http.put(root + '/api/questions/' + $id, $scope.question)
			.success(function(data){
				$scope.all();
				$('#editQuestion').modal('hide');
			})
			.error(function(error){
				console.log('Erro ao atualizar')
			});
	}

	// delete question
	$scope.delete = function($id){
		$http.delete(root + '/api/questions/' + $id)
			.success(function(data){
				$scope.all();
			})
			.error(function(error){
				console.log('Não foi possível deletar')
			});
	}

	// reset $scope.question
	$scope.new = function(){
		$scope.question = $scope.instance();
	}

	// empty instance $scope.question
	$scope.instance = function(){
		return {
			'title' : '',
			'content' : '',
			'answers': {
				'0' : {'text': '', 'correct' : 1},
				'1' : {'text': '', 'correct' : 0},
				'2' : {'text': '', 'correct' : 0},
				'3' : {'text': '', 'correct' : 0},
				'4' : {'text': '', 'correct' : 0},
			}
		}
	}

});