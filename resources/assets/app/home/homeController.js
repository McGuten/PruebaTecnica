(function() {
  'use strict';
  angular
    .module('app.homeController', [])
    .controller('homeController', loadFunction);

  loadFunction.$inject = ['$scope', '$location', '$rootScope', 'serviceCookies', 'servicesData'];

  function loadFunction($scope, $location, $rootScope, serviceCookies, servicesData) {
    var listitem = servicesData.getItems();
    $scope.shopname = servicesData.getName();
    $scope.offers = [];
    $scope.clearCookie = clearCookie;
    init();

    function init() {
      var cookie;
      var cart;
      if(serviceCookies.checkCookie()) {
        cart = serviceCookies.getCookiesObject();
        console.log(cart);
      } else {
        var arr = [];
        serviceCookies.putCookiesObject(arr);
        console.log("Cookie creada con objeto"+serviceCookies.getCookiesObject());
      }
    }
    function clearCookie(){
      serviceCookies.removeCookie();
    }


  }


}());
