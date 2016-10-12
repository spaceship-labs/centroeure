app.controller('FormCtrl', function ($scope){

  $scope.formData = {};

  $scope.submitForm = function (formData){
    //alert('Form submitted with' + JSON.stringify(formData));
  };

  $scope.validateInput = function(form,mymodel,type){
        //console.log('$scope.WebToLeadForm',form);
        if( type == 'email' ){
            if( mymodel.email.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null ){
                form.email1.$setValidity('valid',false);
            }else{
                form.email1.$setValidity('valid',true);
            }
        }
        if( type == 'email2' ){
            if( mymodel.email.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null ){
                form.email.$setValidity('valid',false);
            }else{
                form.email.$setValidity('valid',true);
            }
        }
        console.log(form.email1);
    }

});

app.directive('capitalizeFirst', function (uppercaseFilter, $parse) {
    return {
        require: 'ngModel',
        scope: {
            ngModel: "="
        },
        link: function (scope, element, attrs, modelCtrl) {
            
            scope.$watch("ngModel", function () {
                if( scope.ngModel && scope.ngModel != '' ){
                    scope.ngModel = scope.ngModel.replace(/^(.)|\s(.)/g, function(v){ return v.toUpperCase( ); });
                    scope.ngModel = scope.ngModel.replace(/[`~!@#$%^&*()_|+\-=.,?¡¿:'"<>\{\}\[\]\\\/]/g, '');
                    scope.ngModel = scope.ngModel.replace(/[0-9]/g, '');
                }
            });
        }
    };
});
app.directive('replaceNonAlphanumerics', function (uppercaseFilter, $parse) {
    return {
        require: 'ngModel',
        scope: {
            ngModel: "="
        },
        link: function (scope, element, attrs, modelCtrl) {
            
            scope.$watch("ngModel", function () {
                if( scope.ngModel && scope.ngModel != '' ){
                    scope.ngModel = scope.ngModel.replace(/[`~!@#$%^&*()_|+\-=¡¿:'"<>\{\}\[\]\\\/]/g, '');
                }
            });
        }
    };
});
app.directive('inputJustNumbers', function (uppercaseFilter, $parse) {
    return {
        require: 'ngModel',
        scope: {
            ngModel: "="
        },
        link: function (scope, element, attrs, modelCtrl) {
            scope.$watch("ngModel", function () {
                if( scope.ngModel && scope.ngModel != '' ){
                    scope.ngModel = scope.ngModel.replace(/[^\d.-]/g, '');
                    scope.ngModel = scope.ngModel.slice(0,15);
                }
            });
        }
    };
});

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
                    scrollTop: $('#' + target).offset().top -70
                }, 600);
            },
            300           
        );
    }
});

wow = new WOW(
  {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
)

function inicializar_mapa() {

  var mapOptions = {
      center: new google.maps.LatLng(37.774807, -3.795573),
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById("mapa_div"),
      mapOptions);

  var pos = new google.maps.LatLng(37.774807, -3.795573);

  var marker = new google.maps.Marker({
      position: pos,
      map: map,
      title: "Esto es un marcador",
      animation: google.maps.Animation.DROP
  });


   
};

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
        },300);
   };

   $scope.subMenu1 = function(e) {
      $scope.subMenu2.show = false;
      $timeout.cancel($scope.custome_time);
      $scope.custome_time  = $timeout(function(){
          $scope.subMenu1.show = !$scope.subMenu1.show;
        //  console.log("entre a la funcion");
        },300);
   };

   $scope.subMenu2 = function(e) {
      $scope.subMenu1.show = false;
      $timeout.cancel($scope.custome_time);
      $scope.custome_time  = $timeout(function(){
          $scope.subMenu2.show = !$scope.subMenu2.show;
        //  console.log("entre a la funcion");
        },300);
   };

});

function Map(){

  $(".icon-LOCATION").click(function(e) {
        var id_estado = $(this).attr("estado");
        $('.'+id_estado).css({'opacity' : '1', 'top' : '30px', 'visibility' : 'visible'});
  })

  $(".icon-ICONO_TACHE").click(function(e) {
        $('.map-box').css({'opacity' : '0', 'top' : '50%', 'visibility' : 'hidden'});
  })

}

function hover(){
     
}


//mapa home
$(function () {
    
    resize_map();
    
    // Prepare demo data
    var data = [
        {
            "hc-key": "mx-3622",
            "value": 0,
        },
        {
            "hc-key": "mx-bc",
            "value": 1,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-bc 1' estado='mx-bc'> </i>"
        },
        {
            "hc-key": "mx-bs",
            "value": 2,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-bs 2' estado='mx-bs'> </i>"
        },
        {
            "hc-key": "mx-so",
            "value": 3,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-son 3' estado='so'> </i>"
        },
        {
            "hc-key": "mx-cl",
            "value": 4,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-col 4' estado='col'> </i>"
        },
        {
            "hc-key": "mx-na",
            "value": 5,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-na 5' estado='mx-na'> </i>"
        },
        {
            "hc-key": "mx-cm",
            "value": 6,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-cm 6' estado='mx-cm'> </i>"
        },
        {
            "hc-key": "mx-qr",
            "value": 7,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-qr 7' estado='mx-qr'> </i>"
        },
        {
            "hc-key": "mx-mx",
            "value": 8,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-edo 8' estado='edo'> </i>"
        },
        {
            "hc-key": "mx-mo",
            "value": 9,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-mo 9' estado='mx-mo'> </i>"
        },
        {
            "hc-key": "mx-df",
            "value": 10,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-df 10' estado='mx-df'> </i>"
        },
        {
            "hc-key": "mx-qt",
            "value": 11,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-qt 11' estado='mx-qt'> </i>"
        },
        {
            "hc-key": "mx-tb",
            "value": 12,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-tb 12' estado='mx-tb'> </i>"
        },
        {
            "hc-key": "mx-cs",
            "value": 13,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-cs 13' estado='mx-cs'> </i>"
        },
        {
            "hc-key": "mx-nl",
            "value": 14,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-nuevoleon 14' estado='nuevoleon'> </i>"
        },
        {
            "hc-key": "mx-si",
            "value": 15,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-si 15' estado='mx-si'> </i>"
        },
        {
            "hc-key": "mx-ch",
            "value": 16,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-chi 16' estado='chi'> </i>"
        },
        {
            "hc-key": "mx-ve",
            "value": 17,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-ve 17' estado='mx-ve'> </i>"
        },
        {
            "hc-key": "mx-za",
            "value": 18,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-za 18' estado='mx-za'> </i>"
        },
        {
            "hc-key": "mx-ag",
            "value": 19,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-ag 19' estado='mx-ag'> </i>"
        },
        {
            "hc-key": "mx-ja",
            "value": 20,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-ja 20' estado='ja'> </i>"
        },
        {
            "hc-key": "mx-mi",
            "value": 21,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mich 21' estado='mich'> </i>"
        },
        {
            "hc-key": "mx-oa",
            "value": 22,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-oa 22' estado='mx-oa'> </i>"
        },
        {
            "hc-key": "mx-pu",
            "value": 23,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-pu 23' estado='mx-pu'> </i>"
        },
        {
            "hc-key": "mx-gr",
            "value": 24,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-gerr 24' estado='gerr'> </i>"
        },
        {
            "hc-key": "mx-tl",
            "value": 25,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-tl 25' estado='mx-tl'> </i>"
        },
        {
            "hc-key": "mx-tm",
            "value": 26,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-tamaulipas 26' estado='tamaulipas'> </i>"
        },
        {
            "hc-key": "mx-co",
            "value": 27,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-co 27' estado='mx-co'> </i>"
        },
        {
            "hc-key": "mx-yu",
            "value": 28,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-yucatan 28' estado='yucatan'> </i>"
        },
        {
            "hc-key": "mx-dg",
            "value": 29,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-dg 29' estado='mx-dg'> </i>"
        },
        {
            "hc-key": "mx-gj",
            "value": 30,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-guan 30' estado='guan'> </i>"
        },
        {
            "hc-key": "mx-sl",
            "value": 31,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-mx-sl 31' estado='mx-sl'> </i>"
        },
        {
            "hc-key": "mx-hg",
            "value": 32,
            icon: "<i onclick='Map()' class='icon-LOCATION icon-hid 32' estado='hid'> </i>"
        }
    ];

$('#container').highcharts('Map', {
        title : { text : '' },
        subtitle : { text : '' },
        chart: {             
            type: 'map',
            backgroundColor: '#ABD0D6', 
            width: $width_map,
            height: 550
        },
        mapNavigation: {
            enabled: false,
        },
        exporting: { enabled: false },
         colorAxis: {
            dataClasses: [{
                from: 0,
                to: 50,
                color: '#fafafa',
                name: 'México',
            },]
        },
        tooltip: { enabled :false },

         plotOptions: {
                series: {
                    point: {
                        events: {
                            mouseOver: function () {
                                hover_estado = this.value,
                                $('.'+hover_estado).css({'color' : '#7CA429'})

                            },
                            mouseOut: function () {
                                $('.'+hover_estado).css({'color' : '#AA1A24'})

                            }
                        }
                    }
                }
            },

        series : [{
            borderWidth: 3,
            borderColor: '#ABD0D6',
            data : data,
            borderWidth: .7,
            mapData: Highcharts.maps['countries/mx/mx-all'],
            joinBy: 'hc-key',
            name: 'Ciudad',
            states: {
                hover: { color: '#A61817' },
                borderWidth: 20,
                borderColor: 'black',
            },
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                format: '{point.icon}',
                style: {
                    textTransform: 'uppercase'
                },
                useHTML: true,
                    formatter: function() {
                    return ("<span class='datalabel'>" + this.y + "</span>");
                }
            },
        }],
    });
});


//mapa home
$(function () {
    // Prepare demo data
    var data = [
        {
            "hc-key": "mx-3622",
            "value": 0,
        },
        {
            "hc-key": "mx-bc",
            "value": 1,
        },
        {
            "hc-key": "mx-bs",
            "value": 2,
        },
        {
            "hc-key": "mx-so",
            "value": 3,
        },
        {
            "hc-key": "mx-cl",
            "value": 4,
        },
        {
            "hc-key": "mx-na",
            "value": 5,
            icon: ""
        },
        {
            "hc-key": "mx-cm",
            "value": 6,
            icon: ""
        },
        {
            "hc-key": "mx-qr",
            "value": 7,
            icon: ""
        },
        {
            "hc-key": "mx-mx",
            "value": 8,
        },
        {
            "hc-key": "mx-mo",
            "value": 9,
            icon: ""
        },
        {
            "hc-key": "mx-df",
            "value": 10,
            icon: ""
        },
        {
            "hc-key": "mx-qt",
            "value": 11,
            icon: ""
        },
        {
            "hc-key": "mx-tb",
            "value": 12,
        },
        {
            "hc-key": "mx-cs",
            "value": 13,
        },
        {
            "hc-key": "mx-nl",
            "value": 14,
        },
        {
            "hc-key": "mx-si",
            "value": 15,
        },
        {
            "hc-key": "mx-ch",
            "value": 16,
        },
        {
            "hc-key": "mx-ve",
            "value": 17,
        },
        {
            "hc-key": "mx-za",
            "value": 18,
        },
        {
            "hc-key": "mx-ag",
            "value": 19,
        },
        {
            "hc-key": "mx-ja",
            "value": 20,
        },
        {
            "hc-key": "mx-mi",
            "value": 21,
        },
        {
            "hc-key": "mx-oa",
            "value": 22,
            icon: ""
        },
        {
            "hc-key": "mx-pu",
            "value": 23,
            icon: ""
        },
        {
            "hc-key": "mx-gr",
            "value": 24,
        },
        {
            "hc-key": "mx-tl",
            "value": 25,
            icon: ""
        },
        {
            "hc-key": "mx-tm",
            "value": 26,
        },
        {
            "hc-key": "mx-co",
            "value": 27,
            icon: ""
        },
        {
            "hc-key": "mx-yu",
            "value": 28,
        },
        {
            "hc-key": "mx-dg",
            "value": 29,
            icon: ""
        },
        {
            "hc-key": "mx-gj",
            "value": 30,
        },
        {
            "hc-key": "mx-sl",
            "value": 31,
            icon: ""
        },
        {
            "hc-key": "mx-hg",
            "value": 32,
        }
    ];

$('#map').highcharts('Map', {
        title : { text : '' },
        subtitle : { text : '' },
        chart: {             
            type: 'map',
            backgroundColor: 'transparent', 
            width: 330,
            height: 350,
        },
        mapNavigation: {
            enabled: false,
        },
        exporting: { enabled: false },
         colorAxis: {
            dataClasses: [
                {
                    from: 0,
                    to: 32,
                    color: 'white',
                    name: 'México',
                },
                {
                    from: location_map,
                    to: location_map,
                    color: '#A61817',
                    name: 'Proyecto',
                },
                ]
        },
        tooltip: { enabled :false },

        series : [{
            borderWidth: 3,
            borderColor: '#ABD0D6',
            data : data,
            borderColor: 'none',
            mapData: Highcharts.maps['countries/mx/mx-all'],
            joinBy: 'hc-key',
            name: 'Ciudad',
            states: {
                hover: { color: '#A61817' },
                borderWidth: 20,
                borderColor: 'black',
            },
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                format: '{point.icon}',
                fillColor: 'red',
                style: {
                    textTransform: 'uppercase'
                },
                useHTML: true,
                    formatter: function() {
                    return ("<span class='datalabel'>" + this.y + "</span>");
                }
            },
        }],
    });
});


window.onload = lanzar;

function seccion_header(){
  var ventana_alto = $(window).height() -160;
  $('.slider-home').css('min-height', ventana_alto);
  $('.slide-home').css('min-height', ventana_alto);
  $('.item-heigth').css('min-height', ventana_alto);
  /*console.log(ventana_alto)*/
};

function resize_map(){
    var ventana_widht = $(window).width();
    if (ventana_widht >=700) {
        $width_map = 700;    
    }else if (ventana_widht < 700 && ventana_widht > 500 ) {
        $width_map = 500;
    }else if (ventana_widht < 500) {
        $width_map = 300;
    };
}

function SliderTest(){
    
  var owl = $(".slider");

  owl.owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 5, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,5], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : [400,2] // itemsMobile disabled - inherit from itemsTablet option
    });

    $(".flecha-left").click(function(){
        owl.trigger('owl.next');
    });
    $(".flecha-right").click(function(){
        owl.trigger('owl.prev');
    })
}
function SliderHOme(){
    
  var owl = $(".slide-home");

  owl.owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 1, //10 items above 1000px browser width
    });

    $(".boton-der").click(function(){
        owl.trigger('owl.next');
    });
    $(".boton-izq").click(function(){
        owl.trigger('owl.prev');
    })
}

$(window).resize(function(){
    seccion_header();
});

$(document).ready(function() {
    Map();
    SliderTest();
    SliderHOme()
});


function lanzar(){
  seccion_header();
  inicializar_mapa() 
}