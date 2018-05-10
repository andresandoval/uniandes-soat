/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'md5'], function (modules, $ng, md5) {

    return modules.$$kernel.controller("department_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope, $$alert) {

            $scope.$$operations = {
                process: {},
                retrieveCoordinationList: {}
            };

            $scope.$$elements = {
                coordinationIdentifier: {
                    title: 'Coordinación',
                    required: false
                },
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 64
                },
                code: {
                    title: 'Código',
                    show: function () {
                        return ($scope.$$entity.identifier !== null);
                    },
                    readonly: true
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
                coordinationList : {
                    data: null,
                    populate: function(data){
                        this.data = data;
                        if (this.data === undefined || this.data === null) {
                            return;
                        }
                        if ($scope.$$entity.coordination_identifier === undefined) {
                            $scope.$$entity.coordination_identifier = null;
                        }
                        var selObj = null;
                        if ($scope.$$entity.coordination_identifier === null || (typeof $scope.$$entity.coordination_identifier) !== "object") {
                            selObj = this.data.filter(function (obj) {
                                return obj.identifier === $scope.$$entity.coordination_identifier;
                            });
                        } else {
                            selObj = this.data.filter(function (obj) {
                                return obj.identifier === $scope.$$entity.coordination_identifier.identifier;
                            });
                        }
                        $scope.$$entity.coordination_identifier = selObj[0];
                    }
                }
            };

            $scope.$$tinyEntity = {
                data: {
                    department: null
                },
                populate: function () {
                    this.data.department = $ng.copy($scope.$$entity);
                    this.data.department.active = $scope.$$entity.active ? 1 : 0;
                    if ($scope.$$entity.coordination_identifier !== undefined && $scope.$$entity.coordination_identifier !== null) {
                        this.data.department.coordination_identifier = $scope.$$entity.coordination_identifier.identifier;
                    }
                }
            };

            $scope.$$entity = {
                identifier: null,
                coordination_identifier: null,
                name: null,
                code: null,
                description: null,
                active: null
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function (data) {
                $scope.$$operations = data.operations;
                $scope.$$entity = data.entity;
            };

        }]);
});