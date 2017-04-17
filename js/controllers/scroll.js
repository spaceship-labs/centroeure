app.controller("scrollCTL", function ($scope,$location) {
    $scope.$watch(function () {
      return location.hash
    }, function (value) {
      var id = value.replace('#/','')
      $scope.scrollTo(id);
    });
    $scope.scrollTo = function(target){
        
            setTimeout(
                function(){
                    $('html, body').animate({
                        scrollTop: $('#' + target).offset().top - 90
                    }, 600);
                },
                300           
            );
        
    }
});