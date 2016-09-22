angular.module('question', ['ngTagsInput'])
	.config(function($interpolateProvider){
	    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
	});

angular.module('question').controller('QuestionController', function($scope, $http) {

	$scope.questions = [];
	$scope.question = [];
	$scope.tags = [];


	// initial
	$scope.init = function(){
		$scope.all();
		$scope.new()
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

	// show a questios from db
	$scope.show = function($id){
		$http.get(root + '/api/questions/' + $id )
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
				$('#showQuestion').modal('hide');
			})
			.error(function(error){
				console.log('Não foi possível deletar')
			});
	}

	// get all tags
	$scope.allTag = function(){
		$http.get(root + '/api/tags')
			.success(function(data){
				$scope.tags = data;
			})
			.error(function(error){
				console.log('Não foi possível encontrar as categorias cadastradas');
			});
	}

	// delete tag
	$scope.deleteTag = function($id){
		$http.delete(root + '/api/tags/' + $id)
			.success(function(data){
				$scope.all();
				$scope.allTag();
			})
			.error(function(error){
				console.log('Não foi possível deletar')
			});
	}

	$scope.tagscomplete = function($query) {
		return $http.get('/api/tags').then(function(response) {
	  		var tags = response.data;
	  		return tags.filter(function(tag) {
	    		return tag.text.toLowerCase().indexOf($query.toLowerCase()) != -1;
	  		});
		});
	};

	// reset $scope.question
	$scope.new = function(){
		$scope.question = $scope.instance();
	}

	// empty instance $scope.question
	$scope.instance = function(){
		return {
			'title' : '',
			'content' : '',
			'difficulty' : 1,
			'correct_id' : 1,
			'answers': [
				{'id' : 1, 'text': ''},
				{'id' : 2, 'text': ''},
				{'id' : 3, 'text': ''},
				{'id' : 4, 'text': ''},
				{'id' : 5, 'text': ''},
			]
		}
	}

});