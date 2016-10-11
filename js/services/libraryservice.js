'use strict';

/**
 * @ngdoc service
 * @name centroEure.libraryService
 * @description
 * # miaService
 * Service in the ambientalappApp.
 */
angular.module('project')
  .service('libraryService', libraryService);

function libraryService(Publicacion) {
  var service = {
    getPublications : getPublications,
  };
  return service;

  function getPublications(options) {
    var defaults = {
      query: {
        sort: { 'Fecha de publicación': -1 }
      },
      page : 1,
    }

    angular.merge(defaults,options);
    angular.merge(defaults.query,paginationOptions(defaults.page));
    //console.log(defaults);
    return Publicacion.all(defaults.query);
  }

  function paginationOptions(page){
    var limit = 5;
    var skip = (page - 1) * limit;
    return {
      skip : skip,
      limit : limit,
    }
  }


}
