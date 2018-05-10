/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'jquery-ui'], function (modules, $ng) {

    return modules.$$kernel.controller('home_controller', ['$scope', '$rootScope', '$$alert', function ($scope, $rootScope, $$alert) {

            $scope.refreshMenuTree = function () {
                $rootScope.$emit("$$jstree-refresh", null);
            };

            $scope.closeDialog = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.operations.save.identifier);
                $rootScope.$emit('$$jstree-refresh');
                $$alert.close($scope.currentDialog);
            };
        }]);


});