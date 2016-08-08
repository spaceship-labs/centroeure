/*app.controller('HeaderCtrl', function($scope, $window) {
    angular.element($window).bind("scroll", function() { 
        var header = (this.pageYOffset);
        //console.log(header);
        if (header > 200) {
          $('.header').addClass("header-scroll");
          //console.log('entro en 3')
        };
        if (header <= 40) {
          $('.header').removeClass("header-scroll");
          //console.log('entro en 3')
        };
    });
});*/

app.controller('movil', function($scope, $mdSidenav) {
  $scope.openMenu = function() {
    $mdSidenav('left').toggle();
  };
});