/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07-may-2016-11:21:05
 * Contact: andresandoval992@gmail.com
 *
 * objection-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("objection_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {
                process: {}
            };

            $scope.$$elements = {
                number: {
                    title: 'Numero de objeción',
                    required: true,
                    maxlength: 64
                },
                value: {
                    title: 'Valor objetado',
                    required: true,
                    maxlength: 19,
                    minValue: 1,
                    maxValue: 1
                },
                invoice: {
                    title: 'Factura',
                    required: true,
                    maxlength: 64
                },
                description: {
                    title: 'Descripcion',
                    required: false,
                    maxlength: 2048
                }
            };

            $scope.$$layout = {
                valorPlanillado: 0,
                validateValues: function(){
                    for(i = 0; i < $scope.$$detail.length; i++){
                        if($scope.$$detail[i].objecion_value > $scope.$$detail[i].total_value){
                            return "El valor objetado no puede ser mayor al valor planillado";
                        }
                    }
                    return true;
                }
            };

            $scope.$$entity = {
                form008_identifier: null,
                number: null,
                value: null,
                invoice: null,
                description: null
            };
            $scope.$$detail = [];

            $scope.$$tinyEntity = {
                data: {
                    objection: {},
                    detail: []
                },
                populate: function () {
                    this.data.detail = [];
                    $scope.$$entity.value = 0;
                    for(i = 0; i < $scope.$$detail.length; i++){
                        this.data.detail.push([$scope.$$detail[i].identifier, $scope.$$detail[i].item_type, $scope.$$detail[i].objecion_value]);
                        $scope.$$entity.value += parseFloat($scope.$$detail[i].objecion_value);
                    }
                    this.data.objection = $ng.copy($scope.$$entity);
                    
                    
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_form008_seguimiento_listas');
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity = $$data.entity;
                $scope.$$detail = $$data.detail;
                $scope.$$layout.valorPlanillado = $$data.valorPlanillado;
                $scope.$$elements.value.maxValue = $$data.valorPlanillado;
            };

        }]);
});