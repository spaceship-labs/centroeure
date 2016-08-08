var app = angular.module('project',['ngMaterial', 'ngAnimate'])

app.controller('equipoCTL', function ($scope) {
  $(".abrir-info").click(function(e) {
    var id_person = $(this).attr("person");
    console.log(id_person);
    $('.more-info').css({'opacity' : '0', 'bottom' : '-30px', 'z-index' : '0'})
    if ($('.'+id_person).css('opacity') == "0"){
    	$('.'+id_person).css({'opacity' : '1', 'bottom' : '116px', 'z-index' : '2'})
    }
  })
  $(".cerrar-info").click(function(e) {
   	$('.more-info').css({'opacity' : '0', 'bottom' : '-30px', 'z-index' : '0'})
  })

})

app.controller('iconCTL', function ($scope) {
  $(".cont").click(function(e) {
    var id_info = $(this).attr("info");
    console.log(id_info);
    $('.info').css({'opacity' : '0', 'top' : '10px', 'visibility' : 'hidden'})
    if ($('.'+id_info).css('opacity') == "0"){
      $('.'+id_info).css({'opacity' : '1', 'top' : '0px', 'visibility' : 'visible'})
    }
  })

})

app.controller('MovilCtrl', function ($scope,$timeout) {

   $scope.menuState = {}
   $scope.menuState.show = false;
   $scope.subMenu1 = {}
   $scope.subMenu1.show = false;
   $scope.subMenu2 = {}
   $scope.subMenu2.show = false;
   $scope.custome_time;
   $scope.mostrarMenu = function(e) {
      $timeout.cancel($scope.custome_time);
      $scope.custome_time  = $timeout(function(){
          $scope.menuState.show = !$scope.menuState.show;
        },500);
   };

   $scope.subMenu1 = function(e) {
      $scope.subMenu2.show = false;
      $timeout.cancel($scope.custome_time);
      $scope.custome_time  = $timeout(function(){
          $scope.subMenu1.show = !$scope.subMenu1.show;
        //  console.log("entre a la funcion");
        },500);
   };

   $scope.subMenu2 = function(e) {
      $scope.subMenu1.show = false;
      $timeout.cancel($scope.custome_time);
      $scope.custome_time  = $timeout(function(){
          $scope.subMenu2.show = !$scope.subMenu2.show;
        //  console.log("entre a la funcion");
        },500);
   };

})