app.controller('mainController', function($scope, $http){

	$scope.lists = [];
	$scope.statusFields = ['Sin completar', 'Completadas', 'Todos'];
	$scope.statusField = ['Todos']; //default
	
	$scope.init = function(){
		$http.get('http://proyectos.local/angulistr/index.php/lists/json').success(function(data){
			$scope.lists = data;
			console.log(data);
		}).error(function(error) {
			console.log("JSON ERROR");
	    });
		
	};
	
	$scope.byStatus = function(lists){
	   	switch($scope.statusField){
		   	case "Sin completar":
		   		return lists.status == 0;
		   		break;
		   	case "Completadas":
		   		return lists.status == 1;
		   		break;
		   	default:
		   		return lists;
		   		break;
	   	}
   	};
		
});
