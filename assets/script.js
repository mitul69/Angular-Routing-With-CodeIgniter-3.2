
var ci3App = angular.module('ci3App', ['ngRoute', "ui.bootstrap.modal"]);
ci3App.config(function($routeProvider) {
    $routeProvider
            .when('/', {
        templateUrl: 'index.php/welcome/home',
        controller: 'mainController'
    })

            .when('/user', {
        templateUrl: 'index.php/user/',
        controller: 'userController'
    })

});

ci3App.controller('mainController', function($scope) {
    $scope.message = 'Everyone come and see how good I look!';
});

ci3App.controller('userController', function($window, $location, $scope, $http) {
    $scope.users = [];
    $scope.operation = 'Add New';
    $scope.username = '';
    $scope.userId = 0;
    $scope.email = '';

    $scope.updateList = function() {
        $http.get(siteUrl + "user/getList").success(function(response) {
            $scope.users = response;
        });
    }

    $scope.save = function() {
        var data = JSON.stringify({
            username: $scope.username,
            email: $scope.email,
            id: $scope.userId
        });
        $http.post(siteUrl + "user/save/", data).success(function(data, status) {
            $scope.userModal = false;
            $scope.updateList();
        });

    }

    $scope.deleteUser = function(userId, index) {
        $http.get(siteUrl + "user/remove/" + userId).success(function(response) {
            $scope.users.splice(index, 1);
        });
    }

    $scope.openModal = function() {
        $scope.username = '';
        $scope.operation = 'Add User';
        $scope.email = '';
        $scope.userId = 0;
        $location.path = '#/user/add';
        $scope.userModal = true;

    }
    $scope.closeModal = function() {
        $scope.username = '';
        $scope.email = '';
        $scope.userId = 0;
        $scope.userModal = false;
    }

    $scope.editUser = function(user) {
        $scope.operation = 'Update User';
        $scope.username = user.username;
        $scope.email = user.email;
        $scope.userId = user.id;
        $scope.userModal = true;
    }
    $scope.updateList();
});

