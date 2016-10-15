'use strict';

angular.module('app').
    config(function($stateProvider) {
    
        var homeState = {
          name: 'home',
          url: '/home',
          templateUrl: '/js/angular-app/partials/home.html'
        };

        $stateProvider.state(homeState);
});