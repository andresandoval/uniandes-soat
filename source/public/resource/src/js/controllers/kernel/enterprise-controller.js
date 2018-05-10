/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'md5'], function (modules, $ng, md5) {

    return modules.$$kernel.controller("enterprise_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope, $$alert) {

            $scope.$$operations = {
                process: {}
            };

            $scope.$$elements = {
                identity_number: {
                    title: 'RUC',
                    required: true
                },
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 64
                },
                business_name: {
                    title: 'Nombre comercial',
                    required: true,
                    maxlength: 64
                },
                law_representative: {
                    title: 'Representante legal',
                    required: true,
                    maxlength: 64
                },
                address: {
                    title: 'Dirección',
                    required: true,
                    maxlength: 64
                },
                phone: {
                    title: 'Teléfono',
                    required: true,
                    maxlength: 10
                },
                email: {
                    title: 'Email',
                    required: true,
                    maxlength: 64
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si la empresa está activa o no'
                },
                description: {
                    title: 'Description',
                    required: false,
                    maxlength: 2048
                }
            };

            $scope.$$entity = {
                identifier: null,
                login: null,
                active: null,
                profile_identifier: null,
                department_identifier: null,
                name: null,
                last_name: null,
                email: null,
                password: null,
                description: null
            };

            $scope.$$tinyEntity = {
                data: {
                    enterprise: null
                },
                populate: function () {
                    this.data.enterprise = $ng.copy($scope.$$entity);
                    this.data.enterprise.active = $scope.$$entity.active ? 1 : 0;
                }
            };

            $scope.$$initController = function (data) {
                $scope.$$operations = data.operations;
                $scope.$$entity = data.entity;
            };

        }]);
});