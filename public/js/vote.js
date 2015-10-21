var myApp = angular.module('votes', []);

myApp.controller('VotesController', function ($scope, $http) {
    //$scope.voted = true;
    $scope.voted = [];
    $scope.points = [];


    //$http.get('/allLinks').success(function(links) {
    //    $scope.links = links;
    //});

    $scope.upvote = (function(id) {
      
      var promise = $http({
        method : 'POST',
        url : '/votes/upvote',
        data : {id:id}
      })
      .success(function(data, status, headers, config) {
        var response = data;

        $scope.voted[id] = true;  

        var currentPoints = angular.element( document.querySelector( '#item-'+id ) ).text();

        currentPoints = parseInt(currentPoints) + 1;
        $scope.points[id] = currentPoints;

        Flash(response.title, response.message, response.level);

      });    

    });


    $scope.downvote = (function(id) {
      
      var promise = $http({
        method : 'POST',
        url : '/votes/downvote',
        data : {id:id}
      })
      .success(function(data, status, headers, config) {
        var response = data;

        $scope.voted[id] = true;  

        var currentPoints = angular.element( document.querySelector( '#item-'+id ) ).text();

        currentPoints = parseInt(currentPoints) - 1;
        $scope.points[id] = currentPoints;

        Flash(response.title, response.message, response.level);

      });    

    });

});

function Flash(title, text, type)
{
  swal(
    {   
      title: title,   
      text: text,   
      type: type,
      timer: 2000,   
      showConfirmButton: false
    }
  );
}
