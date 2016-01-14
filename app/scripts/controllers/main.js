'use strict';

/**
* @ngdoc function
* @name swarmapYoApp.controller:MainCtrl
* @description
* # MainCtrl
* Controller of the swarmapYoApp
*/
angular.module('swarmapYoApp')
.controller('MainCtrl', ['$scope', 'leafletData',
   function ($scope, leafletData) {
      leafletData.getMap('map').then(function(map){
         var control = L.control.zoom().setPosition("topright");
         map.addControl(control);
      });
      angular.extend($scope, {
         defaults: {
            tileLayer: 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            maxZoom: 14,
            path: {
               weight: 10,
               color: '#800000',
               opacity: 1
            },
            center: {
               lat: 53.5,
               lng: -2.8,
               zoom:6,
            },
            zoomControl: false
         }
      });
   }
]);
