/*
 * Developed by: Andres Sandoval Montoya
 * Date: 06-mar-2016-0:58:42
 * Contact: andresandoval992@gmail.com
 *
 * monthly-statistics-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("monthly_statistics_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.operations = {
                retrievePdf: null
            };

            $scope.$$entity = {
                year: null,
                month: null,
                report: null
            };

            $scope.$$layout = {
                changeYear: function () {
                    if ($scope.$$entity.year == $scope.$$layout.currentYear) {
                        $scope.$$layout.currentMonthList = {};
                        for (var i = 1; i <= $scope.$$layout.currentMonth; i++) {
                            $scope.$$layout.currentMonthList[i] = $scope.$$layout.monthList[i];
                        }
                        if ($scope.$$entity.month > $scope.$$layout.currentMonth) {
                            $scope.$$entity.month = null;
                        }
                    } else {
                        $scope.$$layout.currentMonthList = $ng.copy($scope.$$layout.monthList);
                    }
                    this.changeSrc();
                },
                changeSrc: function () {
                    if ($scope.$$entity.year === undefined || $scope.$$entity.year === null || $scope.$$entity.month === undefined || $scope.$$entity.month === null) {
                        this.src = null;
                    } else {
                        this.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$year=" + $scope.$$entity.year + "&$$month=" + $scope.$$entity.month + "&$$report=" + $scope.$$entity.report;
                    }
                },
                src: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                },
                currentYear: null,
                currentMonth: null,
                yearList: {},
                monthList: {},
                currentMonthList: {}
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity = $$data.entity;
                $scope.$$layout.currentYear = $$data.layout.currentYear;
                $scope.$$layout.currentMonth = $$data.layout.currentMonth;
                $scope.$$layout.yearList = $$data.layout.yearList;
                $scope.$$layout.monthList = $$data.layout.monthList;
                $scope.$$layout.changeYear();
            };

        }]).controller("ambulance_oxigen_use_report_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.operations = {
                retrievePdf: null
            };

            $scope.$$entity = {
                desde: null,
                hasta: null,
                report: "oxygen"
            };

            $scope.$$layout = {
                reportes: {
                    oxygen: "Uso de oxigeno",
                    ambulance: "Uso de ambulancia"
                },
                changeSrc: function () {
                    if ($scope.$$entity.desde === null || $scope.$$entity.desde === undefined || $scope.$$entity.hasta === null || $scope.$$entity.hasta === undefined || $scope.$$entity.report === null || $scope.$$entity.report === undefined) {
                        $scope.$$layout.src = null;
                    } else {
                        var __desde =  $scope.$$entity.desde.getTime();
                        var __hasta =  $scope.$$entity.hasta.getTime();
                        $scope.$$layout.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta + "&$$report=" + $scope.$$entity.report;
                    }
                },
                src: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.desde = new Date();
                var diff = $scope.$$entity.desde.getTime() - 1296000000;
                $scope.$$entity.hasta = new Date();
                $scope.$$layout.changeSrc();
            };

        }]).controller("individual_statistics_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.operations = {
                retrievePdf: null,
                retrieveCsv: null
            };

            $scope.$$entity = {
                desde: null,
                hasta: null,
                item: null
//                item: {
//                    identifier : null,
//                    name : null,
//                    code : null,
//                    group : null,
//                    type : null
//                }
            };

            $scope.$$layout = {
                lista: {},
                changeSrc: function () {
                    if ($scope.$$entity.desde === null || $scope.$$entity.desde === undefined || $scope.$$entity.hasta === null || $scope.$$entity.hasta === undefined || $scope.$$entity.report === null || $scope.$$entity.item === undefined || $scope.$$entity.item === null) {
                        $scope.$$layout.src = null;
                    } else {
                        var __desde =  $scope.$$entity.desde.getTime();
                        var __hasta =  $scope.$$entity.hasta.getTime();
                        $scope.$$layout.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta + "&$$item=" + $scope.$$entity.item.identifier + "&$$type=" + $scope.$$entity.item.type;
                        $scope.$$layout.csv = $$http.url + "?$$request=" + $scope.$$operations.retrieveCsv.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta + "&$$item=" + $scope.$$entity.item.identifier + "&$$type=" + $scope.$$entity.item.type;
                    }
                },
                src: null,
                cav: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.desde = new Date();
                $scope.$$entity.hasta = new Date();
                $scope.$$layout.lista = $$data.lista;
                $scope.$$layout.changeSrc();
            };

        }]).controller("diagnostic_report_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.operations = {
                retrievePdf: null,
                retrieveCsv: null
            };

            $scope.$$entity = {
                desde: null,
                hasta: null,
                item: "-TODOS-"
//                item: {
//                    identifier : null,
//                    name : null,
//                    code : null,
//                    group : null,
//                    type : null
//                }
            };

            $scope.$$layout = {
                changeSrc: function () {
                    if ($scope.$$entity.desde === null || $scope.$$entity.desde === undefined || $scope.$$entity.hasta === null || $scope.$$entity.hasta === undefined || $scope.$$entity.report === null || $scope.$$entity.item === undefined || $scope.$$entity.item === null) {
                        $scope.$$layout.src = null;
                    } else {
                        var __desde =  $scope.$$entity.desde.getTime();
                        var __hasta =  $scope.$$entity.hasta.getTime();
                        var __item = $scope.$$entity.item.c + "-" + $scope.$$entity.item.d;
                        $scope.$$layout.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta + "&$$item=" + __item;
                        $scope.$$layout.csv = $$http.url + "?$$request=" + $scope.$$operations.retrieveCsv.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta + "&$$item=" + __item;
                    }
                },
                src: null,
                cav: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.desde = new Date();
                $scope.$$entity.hasta = new Date();
                //$scope.$$layout.lista = $$data.lista;
                $scope.$$layout.changeSrc();
            };

        }]).controller("generic_report_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.operations = {
                retrievePdf: null,
                retrieveCsv: null
            };

            $scope.$$entity = {
                desde: null,
                hasta: null
            };

            $scope.$$layout = {
                
                changeSrc: function () {
                    if ($scope.$$entity.desde === null || $scope.$$entity.desde === undefined || $scope.$$entity.hasta === null || $scope.$$entity.hasta === undefined) {
                        $scope.$$layout.src = null;
                    } else {
                        var __desde =  $scope.$$entity.desde.getTime();
                        var __hasta =  $scope.$$entity.hasta.getTime();
                        $scope.$$layout.src = $$http.url + "?$$request=" + $scope.$$operations.retrievePdf.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta;
                        $scope.$$layout.csv = $$http.url + "?$$request=" + $scope.$$operations.retrieveCsv.identifier + "&$$desde=" + __desde + "&$$hasta=" + __hasta;
                    }
                },
                src: null,
                csv: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.desde = new Date();
                var diff = $scope.$$entity.desde.getTime() - 1296000000;
                $scope.$$entity.hasta = new Date();
                $scope.$$layout.changeSrc();
            };

        }]).controller("reporte_general_dinamico_controller", ["$scope", "$$http", "$window", function ($scope, $$http, $window) {

            $scope.$$entity = {
                desde: null,
                hasta: null
            };

            $scope.$$layout = {
                
                url: null,
                
                changeSrc: function () {
                    if ($scope.$$entity.desde === null || $scope.$$entity.desde === undefined || $scope.$$entity.hasta === null || $scope.$$entity.hasta === undefined) {
                        $scope.$$layout.src = null;
                    } else {
                        var __desde =  $scope.$$entity.desde.getTime();
                        var __hasta =  $scope.$$entity.hasta.getTime();
                        $scope.$$layout.src = this.url + "?" + "$$desde=" + __desde + "&$$hasta=" + __hasta;
                    }
                },
                src: null,
                csv: null,
                printIframe: function () {
                    $window.frames["printIframe"].focus();
                    $window.frames["printIframe"].print();
                }
            };

            $scope.$$initController = function ($$data) {
                $scope.$$layout.url = $$data.url;
                $scope.$$entity.desde = new Date();
                var diff = $scope.$$entity.desde.getTime() - 1296000000;
                $scope.$$entity.hasta = new Date();
                $scope.$$layout.changeSrc();
            };

        }]);
});