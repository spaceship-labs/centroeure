var app = angular.module('project', ['ngMaterial', 'ngAnimate', 'mongolabResourceHttp', 'angularUtils.directives.dirPagination']);

app.controller('equipoCTL', function($scope) {
  $(".abrir-info").click(function(e) {
    var id_person = $(this).attr("person");
    console.log(id_person);
    $('.more-info').css({ 'opacity': '0', 'bottom': '-30px', 'z-index': '0' })
    if ($('.' + id_person).css('opacity') == "0") {
      $('.' + id_person).css({ 'opacity': '1', 'bottom': '102px', 'z-index': '2' })
    }
  })
  $(".cerrar-info").click(function(e) {
    $('.more-info').css({ 'opacity': '0', 'bottom': '-30px', 'z-index': '0' })
  })

})

app.controller('iconCTL', function($scope) {
  $(".cont").click(function(e) {
    var id_info = $(this).attr("info");
    console.log(id_info);
    $('.info').css({ 'opacity': '0', 'top': '10px', 'visibility': 'hidden' })
    if ($('.' + id_info).css('opacity') == "0") {
      $('.' + id_info).css({ 'opacity': '1', 'top': '0px', 'visibility': 'visible' })
    }
  })

})

app.controller('MovilCtrl', function($scope, $timeout) {

  $scope.menuState = {}
  $scope.menuState.show = false;
  $scope.subMenu1 = {}
  $scope.subMenu1.show = false;
  $scope.subMenu2 = {}
  $scope.subMenu2.show = false;
  $scope.custome_time;
  $scope.mostrarMenu = function(e) {
    $timeout.cancel($scope.custome_time);
    $scope.custome_time = $timeout(function() {
      $scope.menuState.show = !$scope.menuState.show;
    }, 500);
  };

  $scope.subMenu1 = function(e) {
    $scope.subMenu2.show = false;
    $timeout.cancel($scope.custome_time);
    $scope.custome_time = $timeout(function() {
      $scope.subMenu1.show = !$scope.subMenu1.show;
      //  console.log("entre a la funcion");
    }, 500);
  };

  $scope.subMenu2 = function(e) {
    $scope.subMenu1.show = false;
    $timeout.cancel($scope.custome_time);
    $scope.custome_time = $timeout(function() {
      $scope.subMenu2.show = !$scope.subMenu2.show;
      //  console.log("entre a la funcion");
    }, 500);
  };

});

app.controller('biblioCTL', function($scope, Publicacion, libraryService) {
  $scope.pagination = {
    currentPage: 1,
    totalItems: 5917
  };


  $scope.pageChanged = function(newPage) {
    libraryService.getPublications({ page: newPage })
      .then(function(publicaciones) {
        $scope.pagination.currentPage = newPage;
        $scope.publicaciones = publicaciones;
        return publicaciones;
      });
  };

  $scope.pageChanged(1);
});

app.controller('libroCTL', function($scope, $location, Publicacion, $http) {
  var id = window.location.search.split('id=')[1];
  Publicacion.getById(id).then(function(libro) {
    $scope.libro = libro;
    if (typeof($scope.libro.ISBN) === 'number') {
      $scope.libro.ISBN = $scope.libro.ISBN.toString();
    }
    $scope.isbn = $scope.libro.ISBN.replace('ISBN:', '').replace(/ /g, '').replace(/-/g, '');
    console.log($scope.isbn);

    $http.get('https://www.googleapis.com/books/v1/volumes?q=isbn:' + $scope.isbn).then(function(res) {
      $scope.book = {};
      console.log(res.data);
      if (res.data.items) {
        $scope.book = res.data.items[0];
        console.log($scope.book);
      }
    });
  });


})
