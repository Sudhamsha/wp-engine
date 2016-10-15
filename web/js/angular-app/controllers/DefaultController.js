'use strict';

/**
 * Default Controller acts as Home Controller (In this case everything)
 */
angular.module('app').
    controller('DefaultController', ['$scope', '$http', '$filter', function($scope, $http, $filter) {

    
    // Initiate Empty Variables
    $scope.beer           = {};
    $scope.search_results = {};
    $scope.error          = {};
    
    // Make HTTP Request to Get a Random Beer
    $scope.getBeer = function(){
         $scope.flash = true;
         $scope.showContent = false;
         $scope.showError = false;
         
         // POST Request
         $http.post('/get-beers', []).then(function(response) {
                $scope.beer  = response.data.data[0];
                // Re-run the getBeer function if description is Null
                if(!$scope.beer.description){
                    $scope.getBeer();
                }
                $scope.flash = false;
                $scope.showContent = true;
                $scope.showError = false;
         }, function(error){
                $scope.flash = false;
                $scope.showContent = false;
                $scope.showError = true;
                $scope.error = error.data;
         });
    };

    var noCheck = false;
    
    // Search Beers/Breweries
    $scope.getResults = function(searchText, searchType, noCheck){
        
        // See if you need to perform the regex check
        if(!noCheck){
            
            // Check if the variables are defined
            if(!angular.isDefined(searchText) || !angular.isDefined(searchType)){
            $scope.showError = true;
            $scope.error     = "Please fill the search input and Select the Type";
            return false;
            }
            
            // Check if the string only contains Alpha Numeric, spaces, hyphens
            var regex = new RegExp("^[a-zA-Z0-9_\d\_\s-]+$");
            if (regex.test(searchText)) {
                $scope.showError = false;
                console.log("Valid");
            } else {
                $scope.showError = true;
                $scope.error     = "Search Text should only contain Strings, hyphens, number or spaces";
                return false;
            }
        }
        
        
         $scope.flash       = true;
         $scope.showContent = false;
         
        // POST Request
         $http.post('/search', {type: searchType, text: searchText}).then(function(response) {
                $scope.search_results  = response.data;

                $scope.search_results  = $scope.search_results.data;
                // If there's no check, user is lookin for more beers in the brewery, so filter! 
                if(noCheck){
                    $scope.search_results  = $filter('filter')($scope.search_results.data, {$: $scope.beer.breweries[0].name});
                }
                $scope.flash = false;
                $scope.showContent = true;
                $scope.showError = false;
         }, function(error){
                $scope.flash = false;
                $scope.showContent = false;
                $scope.showError = true;
                $scope.error = error.data;
         });
    };
    
    // On Initialise get a random beer!
    $scope.init = function(){
        $scope.getBeer();
    };
    
    // Initialise on load
    $scope.init();
   
}]);