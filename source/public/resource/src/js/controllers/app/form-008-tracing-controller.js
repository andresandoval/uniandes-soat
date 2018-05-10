/*
 * Developed by: Andres Sandoval Montoya
 * Date: 06-mar-2016-0:56:23
 * Contact: andresandoval992@gmail.com
 *
 * form-008-controller, part of soat
 */



define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("form008_tracing_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {};

            $scope.$$elements = {
                doctor: {
                    title: 'Medico asignado',
                    required: true
                }
            };

            $scope.$$layout = {
                enableToGenerateExpenseForm: false,
                enableToViewExpenseForm: false,
                notExpenseFormMessage: null,
                tracingList: {
                    ambulanceUseList: null,
                    ambulanceUseTotal: 0,
                    oxygenUseList: null,
                    oxygenUseTotal: 0,
                    doctor: null,
                    populate: function (data) {
                        this.ambulanceUseList = data.ambulance_use;
                        this.ambulanceUseTotal = 0;
                        for (i = 0; i < data.ambulance_use.length; i++) {
                            this.ambulanceUseTotal += data.ambulance_use[i].total;
                        }
                        //---------------------------------//
                        this.oxygenUseList = data.oxygen_use;
                        this.oxygenUseTotal = 0;
                        for (i = 0; i < data.oxygen_use.length; i++) {
                            this.oxygenUseTotal += data.oxygen_use[i].total;
                        }
                        //----------------------------------//
                        $scope.$$entity.doctorIdentifier = data.doctorIdentifier;

                        //---------------------------------//
                        this.doctor = data.doctor;
                        var selObj = this.doctor.filter(function (obj) {
                            return obj.identifier === $scope.$$entity.doctorIdentifier;
                        });
                        $scope.$$layout.doctor.model = (selObj[0] !== undefined) ? selObj[0] : null;

                        //----------------------------------//
                        $scope.$$entity.fur = data.fur;
                        //----------------------------------//
                        $scope.$$entity.expense_form = data.expense_form;
                        //----------------------------------//
                        if ($scope.$$entity.fur === undefined || $scope.$$entity.fur === null) {
                            $scope.$$layout.enableToGenerateExpenseForm = false;
                            $scope.$$layout.enableToViewExpenseForm = false;
                            $scope.$$layout.notExpenseFormMessage = 'Aun no se a generado el formulario único de reclamaciones...';
                        } else {
                            if ($scope.$$entity.expense_form === undefined || $scope.$$entity.expense_form === null) {
                                $scope.$$layout.enableToGenerateExpenseForm = true;
                                $scope.$$layout.enableToViewExpenseForm = false;
                                $scope.$$layout.notExpenseFormMessage = 'Aun no se a generado la planilla de gastos...';
                            } else {
                                $scope.$$layout.enableToGenerateExpenseForm = false;
                                $scope.$$layout.enableToViewExpenseForm = true;
                                $scope.$$layout.notExpenseFormMessage = null;
                            }
                        }

                        //----------------------------------//
                        $scope.$$entity.objection = data.objection;
                        //----------------------------------//
						$scope.$$entity.insurance = data.insurance;
						
                    }
                },
                autoPopulate: function () {
                    var __callbacks = {
                        success: function (response) {
                            $scope.$$layout.tracingList.populate(response.$$data);
                        }
                    };
                    $$performAction($scope.$$operations.retrieve_list, {form008_identifier: $scope.$$entity.form008.identifier}, __callbacks, false);
                },
                doctor: {
                    model: null,
                    updateEntity: function () {
                        $scope.$$entity.doctorIdentifier = this.model.identifier;
                    }
                }
            };

            $scope.$$entity = {
                form008: null,
                patient: null,
                doctorIdentifier: null,
                fur: null,
                expense_form: null,
                objection: null,
				insurance: null
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.form008 = $$data.entity.form008;
                $scope.$$entity.patient = $$data.entity.patient;
            };

            $rootScope.$on('$$refresh_form008_seguimiento_listas', function (event) {
                $scope.$$layout.autoPopulate();
            });

        }]);
});