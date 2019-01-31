var App = angular.module('hrdApp',['checklist-model','ngAudio']);

/*App.service('SharedDataService', function () {
	'use strict';
	this.ptname = {kname: ' '};
});*/


App.controller('person',function($scope,$http,$timeout){
	var url = base_url;
 	
		$http.post(url+'index.php/person/get_person').success(function(res){
			console.log(res);
			$scope.person = res;

		});

	$scope.edit = function(i){
		console.log(i);
	}
	
});//end controller 

App.controller('department',function($scope,$http,$timeout){
	var url = base_url;
 	
		$http.post(url+'index.php/department/get_department').success(function(res){
			console.log(res);
			$scope.department = res;

		});

	$scope.edit = function(i){
		console.log(i);
	}
	
});//end controller 
App.controller('subdepartment',function($scope,$http,$timeout){
	var url = base_url;
 	
		$http.post(url+'index.php/subdepartment/get_subdepartment').success(function(res){
			console.log(res);
			$scope.subdepartment = res;

		});

	$scope.edit = function(i){
		console.log(i);
	}
	
});//end controller department_sub