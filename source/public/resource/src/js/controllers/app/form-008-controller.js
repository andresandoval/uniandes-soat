/*
 * Developed by: Andres Sandoval Montoya
 * Date: 06-mar-2016-0:56:23
 * Contact: andresandoval992@gmail.com
 *
 * form-008-controller, part of soat
 */



define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("form008_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {
                retrievePatientList: {},
                addPatient: {}
            };

            $scope.$$elements = {
                patient_identificaion: {
                    title: 'Paciente',
                    required: true
                },
                insurance: {
                    title: 'Seguro del paciente',
                    required: false,
                    options: {}
                }
            };

            $scope.$$layout = {
                patientList: {
                    data: null,
                    loading: false,
                    populate: function () {
                        var __callbacks = {
                            start: function () {
                                $scope.$$layout.patientList.loading = true;
                            },
                            success: function (response) {
                                $scope.$$layout.patientList.data = response.$$data;
                            },
                            final: function () {
                                $scope.$$layout.patientList.loading = false;
                            }
                        };
                        $$performAction($scope.$$operations.retrievePatientList, this.parameters, __callbacks, false);
                    }
                }
            };

            $scope.$$entity = {
                patient_identificaion: null,
                insurance: null
            };

            $scope.$$tinyEntity = {
                data: {
                    "form-008": {
                        patient_identifier: null,
                        insurance: null
                    }
                },
                populate: function () {
                    if ($scope.$$entity.patient_identificaion !== null) {
                        this.data['form-008'].patient_identifier = $scope.$$entity.patient_identificaion.identificacion;
                        this.data['form-008'].insurance = $scope.$$entity.insurance;
                    }
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$layout.patientList.populate();
                $scope.$$elements.insurance.options = $$data.insuranceList;
            };

            $rootScope.$on('$$refresh_form008_patient_list', $scope.$$layout.patientList.populate);

        }]);
});