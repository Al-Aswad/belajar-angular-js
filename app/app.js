const app = angular.module('App', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
        .when('/home', {
            templateUrl: 'view/home.html'
        })
        .when('/contact', {
            templateUrl: 'view/contact.html'
        })
        .when('/data', {
            templateUrl: 'view/data.html',
            controller: 'HomeController'
        }).otherwise({
            redirectTo: '/home'
        })

}])