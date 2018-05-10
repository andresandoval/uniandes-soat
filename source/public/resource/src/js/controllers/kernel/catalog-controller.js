/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'md5'], function (modules, $ng) {

    return modules.$$kernel.controller("catalog_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope) {

            $scope.$$operations = {
                process: {}
            };

            $scope.$$elements = {
                typeText: {
                    title: 'Tipo (txt)',
                    required: false,
                    maxlength: 32
                },
                typeSelect: {
                    title: 'Tipo (sel)',
                    required: true,
                    options: null
                },
                selectTypeOp: {
                    title: '',
                    tooltip: 'Mode de insercion del tipo Texto/Seleccion'
                },
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 64
                },
                value: {
                    title: 'Valor',
                    required: false,
                    maxlength: 1024
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si el departamento está activo o no'
                },
                description: {
                    title: 'Description',
                    required: false,
                    maxlength: 2048
                }
            };

            $scope.$$layout = {
                selectTypeOp: true
            };

            $scope.$$tinyEntity = {
                data: {
                    catalog: null
                },
                populate: function () {
                    $scope.$$elements.typeSelect.required = $scope.$$layout.selectTypeOp;
                    $scope.$$elements.typeText.required = !$scope.$$layout.selectTypeOp;
                    $scope.$$elements.selectTypeOp.title = $scope.$$layout.selectTypeOp ? 'Sel.' : 'Text.';
                    this.data.catalog = $ng.copy($scope.$$entity);
                    this.data.catalog.active = $scope.$$entity.active ? 1 : 0;
                }
            };

            $scope.$$entity = {
                identifier: null,
                type: null,
                name: null,
                value: null,
                active: null,
                description: null
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function (data) {
                $scope.$$operations = data.operations;
                $scope.$$entity = data.entity;
                $scope.$$elements.typeSelect.options = data.catalogTypes;
            };

        }]);
});