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
  var queryCache = {};
  var service = {
    getPublications : getPublications,
    getPublicationsCount: getPublicationsCount
  };
  return service;

  function getPublications(options) {
    var defaults = {
      query: {},
      options: {
        sort: { 'Fecha de publicación': -1 }
      },
      page : 1,
    }

    angular.merge(defaults, options);
    angular.merge(defaults.options, paginationOptions(defaults.page));
    return Publicacion.query(defaults.query, defaults.options);
  }

  function getPublicationsCount(query) {
    var string = JSON.stringify(query)
    if (queryCache[string]) {
      return queryCache[string];
    }
    return Publicacion.count(query).then(function(count){
      queryCache[string] = count;
      return count;
    });
  };

  function paginationOptions(page){
    var limit = 5;
    var skip = (page - 1) * limit;
    return {
      skip : skip,
      limit : limit,
    }
  }


}
