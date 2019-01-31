var loginApp = angular.module('loginApp',[ ]);

loginApp.controller('loginForm',function($scope,$http, $location){
    var url = base_url;
    
 	$scope.loginSubmit = function(){
        var data ='{"birthdate":"'+$scope.birthdate+'","cid":"'+$scope.cid+'"}';  
        if($scope.cid==null ||$scope.birthdate == null){
            console.log("jong");
        }else{
            $http.post(url+'index.php/online/online_post',data).success(function(res){
                if(res.a=='ok'){
                    window.location.replace(url+'online/queue')
                  
                }else {
                  
                    $(document).ready(function(){
                        $.notify({
                            title: "Error : ",
                            message: "ไม่มีข้อมูลในระบบ กรุณาติดต่อทำบัตรใหม่",
                            icon: 'fa fa-check' 
                        },{
                            type: "danger"
                        });
                    });
                    
                }
            });
        }
	} 
});//end controller listSymptoms
