/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07-may-2016-11:21:05
 * Contact: andresandoval992@gmail.com
 *
 * expense-form-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("expense_form_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {
                process: {},
                retrieveTarifOrMedicineList: {}
            };

            $scope.$$elements = {
                tariff_or_medicine: {
                    title: 'detalle',
                    required: true
                },
                diagnostic: {
                    title: 'Diagnostico',
                    required: true,
                    maxlength: 2048
                },
                sppat: {
                    title: 'SPPAT',
                    required: true,
                    maxlength: 19,
                    minValue: 0
                },
                quantity: {
                    title: 'Cantidad',
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
                insurance: null,
                getItemTotal: function (row) {
                    var __total = 0;
                    if (row.item !== undefined && (typeof row.item === 'object')) {
                        __total = row.quantity * row.item.value;
                    }
                    return __total;
                },
                addTariffItem: function () {
                    $scope.$$entity.tariff_item.push({
                        item: undefined,
                        quantity: 1,
                        total: 0
                    });
                },
                addMedicineItem: function () {
                    $scope.$$entity.medicine_item.push({
                        item: undefined,
                        quantity: 1,
                        total: 0
                    });
                },
                removeTariffItem: function (item) {
                    var index = $scope.$$entity.tariff_item.indexOf(item);
                    $scope.$$entity.tariff_item.splice(index, 1);
                },
                removeMedicineItem: function (item) {
                    var index = $scope.$$entity.medicine_item.indexOf(item);
                    $scope.$$entity.medicine_item.splice(index, 1);
                },
                tariffList: [],
                medicineList: [],
                populateLists: function (data) {
                    this.tariffList = data.tariff;
                    this.medicineList = data.medicine;
//                    $scope.$$elements.tariff_item.options = data.tariff;
//                    $scope.$$elements.medicine_item.options = data.medicine;
                },
                validateItems: function () {

                    if (($scope.$$entity.tariff_item.length + $scope.$$entity.medicine_item.length) <= 0) {
                        return 'Debes ingresar al menos un item de tarifario o de lista de medicamentos';
                    }

                    for (var i = 0; i < $scope.$$entity.tariff_item.length; i++) {
                        if ($scope.$$entity.tariff_item[i].item === undefined || $scope.$$entity.tariff_item[i].item === null) {
                            return "Debe seleccionar todos los items del tarifario agregados en la lista";
                        } else if ($scope.$$entity.tariff_item[i].quantity === undefined || $scope.$$entity.tariff_item[i].quantity === null || $scope.$$entity.tariff_item[i].quantity <= 0) {
                            return "Debe ingresar una cantidad de minimo de '1' item";
                        }
                    }
                    for (var i = 0; i < $scope.$$entity.medicine_item.length; i++) {
                        if ($scope.$$entity.medicine_item[i].item === undefined || $scope.$$entity.medicine_item[i].item === null) {
                            return "Debe seleccionar todos los items del stock de medicamentos agregados en la lista";
                        } else if ($scope.$$entity.medicine_item[i].quantity === undefined || $scope.$$entity.medicine_item[i].quantity === null || $scope.$$entity.medicine_item[i].quantity <= 0) {
                            return "Debe ingresar una cantidad de minimo de '1' item";
                        }
                    }

                    /*if ($scope.$$entity.balance <= 0) {
                     return 'El valor del seguro no puede ser mayor al total de consumo';
                     }*/

                    //validar duplicados

                    var tarifario = [];
                    var medicinas = [];

                    for (var i = 0; i < $scope.$$entity.tariff_item.length; i++) {
                        if (tarifario[$scope.$$entity.tariff_item[i].item.identifier] == undefined) {
                            tarifario[$scope.$$entity.tariff_item[i].item.identifier] = 0;
                        }
                        tarifario[$scope.$$entity.tariff_item[i].item.identifier] += 1;
                    }
//                    $ng.forEach(tarifario, function (value, key) {
//                        if(value > 1){
//                            return "Hay items duplicados en el listado del tarifario";
//                        }
//                    });
                    for (var k in tarifario) {
                        if (typeof tarifario[k] !== 'function' && tarifario[k] > 1) {
                            return "Hay items duplicados en el listado del tarifario";
                        }
                    }
                    for (var i = 0; i < $scope.$$entity.medicine_item.length; i++) {
                        if (medicinas[$scope.$$entity.medicine_item[i].item.identifier] == undefined) {
                            medicinas[$scope.$$entity.medicine_item[i].item.identifier] = 0;
                        }
                        medicinas[$scope.$$entity.medicine_item[i].item.identifier] += 1;
                    }
//                    $ng.forEach(medicinas, function (value, key) {
//                        if (value > 1) {
//                            return "Hay items duplicados en el listado de medicinas";
//                        }
//                    });
                    for (var k in medicinas) {
                        if (typeof medicinas[k] !== 'function' && medicinas[k] > 1) {
                            return "Hay items duplicados en el listado de medicinas";
                        }
                    }

                    return true;
                }
            };

            $scope.$$entity = {
                identifier: null,
                form008_identifier: null,
                diagnostic: null,
                total: 0,
                sppat: 0,
                balance: 0,
                description: null,
                tariff_item: [],
                medicine_item: []
            };

            $scope.$$tinyEntity = {
                data: {
                    'expense-form': {}
                },
                populate: function () {
                    var __tariffItem = [];
                    var __medicineItem = [];
                    var __total = 0;

                    for (var i = 0; i < $scope.$$entity.tariff_item.length; i++) {
                        $scope.$$entity.tariff_item[i].total = $scope.$$layout.getItemTotal($scope.$$entity.tariff_item[i]);
                        if ($scope.$$entity.tariff_item[i].item !== undefined && $scope.$$entity.tariff_item[i].item !== null) {
                            __tariffItem.push({
                                item_identifier: $scope.$$entity.tariff_item[i].item.identifier,
                                item_code: $scope.$$entity.tariff_item[i].item.code,
                                item_description: $scope.$$entity.tariff_item[i].item.name,
                                item_type: $scope.$$entity.tariff_item[i].item.type,
                                quantity: $scope.$$entity.tariff_item[i].quantity,
                                unit_value: $scope.$$entity.tariff_item[i].item.value,
                                total_value: $scope.$$entity.tariff_item[i].total
                            });
                        }
                        __total += $scope.$$entity.tariff_item[i].total;
                    }
                    for (var i = 0; i < $scope.$$entity.medicine_item.length; i++) {
                        $scope.$$entity.medicine_item[i].total = $scope.$$layout.getItemTotal($scope.$$entity.medicine_item[i]);
                        if ($scope.$$entity.medicine_item[i].item !== undefined && $scope.$$entity.medicine_item[i].item !== null) {
                            __medicineItem.push({
                                item_identifier: $scope.$$entity.medicine_item[i].item.identifier,
                                item_code: $scope.$$entity.medicine_item[i].item.code,
                                item_description: $scope.$$entity.medicine_item[i].item.name,
                                item_type: $scope.$$entity.medicine_item[i].item.type,
                                quantity: $scope.$$entity.medicine_item[i].quantity,
                                unit_value: $scope.$$entity.medicine_item[i].item.value,
                                total_value: $scope.$$entity.medicine_item[i].total
                            });
                        }
                        __total += $scope.$$entity.medicine_item[i].total;
                    }
                    $scope.$$entity.total = __total;
                    $scope.$$entity.sppat = ($scope.$$layout.insurance == "SOAT") ? 3000 : __total;
                    $scope.$$entity.balance = $scope.$$entity.sppat - $scope.$$entity.total;

                    // $scope.$$elements.sppat.maxValue = __total;

                    $scope.$$tinyEntity.data['expense-form'] = {
                        identifier: $scope.$$entity.identifier,
                        form008_identifier: $scope.$$entity.form008_identifier,
                        diagnostic: $scope.$$entity.diagnostic,
                        total: $scope.$$entity.total,
                        sppat: $scope.$$entity.sppat,
                        balance: $scope.$$entity.balance,
                        tariff_item: __tariffItem,
                        medicine_item: __medicineItem
                    };
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_form008_seguimiento_listas');
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.identifier = $$data.entity.identifier;
                $scope.$$entity.form008_identifier = $$data.entity.form008_identifier;
                $scope.$$entity.diagnostic = $$data.entity.diagnostic;
                $scope.$$entity.total = $$data.entity.total;
                //$scope.$$entity.sppat = $$data.entity.sppat;
                $scope.$$entity.balance = $$data.entity.balance;
                $scope.$$entity.description = $$data.entity.description;
                $scope.$$entity.tariff_item = $$data.entity.tariff_item;
                $scope.$$entity.medicine_item = $$data.entity.medicine_item;

                $scope.$$layout.insurance = $$data.insurance;
                $scope.$$entity.sppat = ($scope.$$layout.insurance == "SOAT") ? 3000 : 0;
            };

        }]);
});