angular.module('question', [])
	.config(function($interpolateProvider){
	    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
	});

angular.module('question').controller('QuestionController', function($scope, $http) {

	$scope.questions = [];

	$scope.init = function(){
		$scope.all();
	}

	$scope.all = function(){
		$http.get(root + '/api/question' )
			.success(function(data){
				$scope.questions = data;
			})
			.error(function(error){
				console.log(error);
			});
	}

});