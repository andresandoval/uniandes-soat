/*
 * Developed by: Andres Sandoval Montoya
 * Date: 06-mar-2016-0:58:42
 * Contact: andresandoval992@gmail.com
 *
 * generic-print-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("generic_print_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.$$operations = {
                retrievePdf: null,
                retrieveCsv: null
            };

            $scope.$$entity = {
                identifier: null
            };

            $scope.$$layout = {
                src: null,
                csv: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                var __id = 0;
                if ($$data.entity !== undefined && $$data.entity !== null) {
                    $scope.$$entity.identifier = $$data.entity.identifier;
                    __id = $$data.entity.identifier;
                }

                $scope.$$layout.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$identifier=" + __id;

                if ($scope.$$operations.retrieveCsv !== undefined && $scope.$$operations.retrieveCsv !== null) {
                    $scope.$$layout.csv = $$http.url + "?$$request=" + $scope.$$operations.retrieveCsv.identifier + "&$$identifier=" + __id;
                }

            };

        }]);
});