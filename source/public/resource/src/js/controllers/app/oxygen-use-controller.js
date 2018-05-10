/*
 * Developed by: Andres Sandoval Montoya
 * Date: 01-jun-2016-15:36:24
 * Contact: andresandoval992@gmail.com
 *
 * oxygen-use-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("oxygen_use_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {
                process: {}
            };

            $scope.$$elements = {
                start_date: {
                    title: 'Fecha de inicio',
                    required: true,
                    maxlength: 64
                },
                start_hour: {
                    title: 'Hora de inicio',
                    required: true,
                    options: {}
                },
                start_minute: {
                    title: 'Minuto de inicio',
                    required: true,
                    options: {}
                },
                end_date: {
                    title: 'Fecha de fin',
                    required: true,
                    maxlength: 64
                },
                end_hour: {
                    title: 'Hora de fin',
                    required: true,
                    options: {}
                },
                end_minute: {
                    title: 'Minuto de fin',
                    required: true,
                    options: {}
                },
                lm: {
                    title: 'Litros/minuto (LM)',
                    required: true,
                    maxlength: 19,
                    minValue: 1
                },
                value: {
                    title: 'Valor individual',
                    required: true,
                    maxlength: 19,
                    minValue: 1
                },
                description: {
                    title: 'Descripcion',
                    required: false,
                    maxlength: 2048
                }
            };

            $scope.$$layout = {
                adjustEndTime: function () {

                    var __startDate = $scope.$$entity.start_date;
                    var __startHour = $scope.$$entity.start_hour;
                    var __startMinute = $scope.$$entity.start_minute;
                    var __endDate = $scope.$$entity.end_date;
                    var __endHour = $scope.$$entity.end_hour;
                    var __endMinute = $scope.$$entity.end_minute;

                    this.validStartDateTime = (__startDate !== undefined && __startDate !== null && __startHour !== undefined && __startHour !== null && __startMinute !== undefined && __startMinute !== null);

                    $scope.$$elements.end_hour.options = {};
                    $scope.$$elements.end_minute.options = {};

                    if (this.validStartDateTime) {

                        if (__endDate === undefined || __endDate === null) {
                            $scope.$$entity.end_date = $ng.copy(__startDate);
                            __endDate = $scope.$$entity.end_date;
                        }
                        if (__startDate.getFullYear() === __endDate.getFullYear() && __startDate.getDate() === __endDate.getDate() && __startDate.getDay() === __endDate.getDay()) {
                            for (var i = __startHour; i < 24; i++) {
                                $scope.$$elements.end_hour.options[i] = (i < 10 ? '0' : '') + i + ' HH';
                            }
                            if (__startHour === __endHour) {
                                for (var i = parseInt(__startMinute) + 1; i < 60; i++) {
                                    $scope.$$elements.end_minute.options[i] = (i < 10 ? '0' : '') + i + ' min';
                                }
                            } else {
                                for (var i = 0; i < 60; i++) {
                                    $scope.$$elements.end_minute.options[i] = (i < 10 ? '0' : '') + i + ' min';
                                }
                            }
                        } else {
                            for (var i = 0; i < 24; i++) {
                                $scope.$$elements.end_hour.options[i] = (i < 10 ? '0' : '') + i + ' HH';
                            }
                            for (var i = 0; i < 60; i++) {
                                $scope.$$elements.end_minute.options[i] = (i < 10 ? '0' : '') + i + ' min';
                            }
                        }

                    } else {
                        $scope.$$entity.end_date = null;
                        $scope.$$entity.end_hour = null;
                        $scope.$$entity.end_minute = null;
                    }

                    this.validEndDateTime = (__endDate !== undefined && __endDate !== null && __endHour !== undefined && __endHour !== null && __endMinute !== undefined && __endMinute !== null);
                },
                adjustDiffTime: function () {
                    var __startDate = $scope.$$entity.start_date;
                    var __endDate = $scope.$$entity.end_date;
                    __startDate.setHours($scope.$$entity.start_hour);
                    __startDate.setMinutes($scope.$$entity.start_minute);
                    __endDate.setHours($scope.$$entity.end_hour);
                    __endDate.setMinutes($scope.$$entity.end_minute);

                    var __tmp1 = __endDate.getTime();
                    var __tmp2 = __startDate.getTime();


                    var __diffMs = (parseInt(__tmp1) - parseInt(__tmp2));

                    $scope.$$entity.diff_hour = Math.floor(__diffMs / 3600000); // hours
                    $scope.$$entity.diff_minute = Math.round((__diffMs % 3600000) / 60000); // minutes left
                    $scope.$$entity.total_minute = Math.round(__diffMs / 60000);
                },
                curDate: null,
                validStartDateTime: false,
                validEndDateTime: false,
                minDate: null,
                maxDate: null
            };

            $scope.$$entity = {
                identifier: null,
                form008_identifier: null,
                start_date: null,
                start_hour: null,
                start_minute: null,
                end_date: null,
                end_hour: null,
                end_minute: null,
                diff_hour: null,
                diff_minute: null,
                total_minute: null,
                lm: null,
                oxygen_code: null,
                oxygen_description: null,
                uvr: null,
                fcm: null,
                value: null,
                total: null,
                description: null
            };

            $scope.$$tinyEntity = {
                data: {
                    'oxygen-use': {}
                },
                populate: function () {
                    $scope.$$layout.adjustEndTime();

                    if ($scope.$$layout.validStartDateTime && $scope.$$layout.validEndDateTime) {
                        $scope.$$layout.adjustDiffTime();
                        $scope.$$entity.total = $scope.$$entity.total_minute * $scope.$$entity.lm * $scope.$$entity.value;
                    }
                    this.data['oxygen-use'] = $ng.copy($scope.$$entity);
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_form008_seguimiento_listas');
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;

                for (var i = 0; i < 24; i++) {
                    $scope.$$elements.start_hour.options[i] = (i < 10 ? '0' : '') + i + ' HH';
                }
                for (var i = 0; i < 60; i++) {
                    $scope.$$elements.start_minute.options[i] = (i < 10 ? '0' : '') + i + ' min';
                }

                $scope.$$layout.curDate = new Date();
                $scope.$$entity = $$data.entity;

                var date = new Date(), y = date.getFullYear(), m = date.getMonth();
                $scope.$$layout.minDate = new Date(y, m, 1);
                $scope.$$layout.maxDate = new Date(y, m + 1, 0);

            };



        }]);
});