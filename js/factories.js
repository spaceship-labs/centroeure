app.factory('Publicacion', function($mongolabResourceHttp) {
    return $mongolabResourceHttp('publicaciones');
});
