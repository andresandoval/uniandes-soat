/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("profile_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope, $$alert) {

            $scope.$$operations = {
                process: {},
                retrieveActionList: {}
            };

            $scope.$$elements = {
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 64
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si la accion esta activa o no'
                },
                description: {
                    title: 'Description',
                    required: false,
                    maxlength: 2048
                },
                actions: function () {
                    return $scope.$$entity.actions.length > 0 ? true : 'Debes seleccionar al menos una acción ademas de las predeterminadas!!';
                }
            };

            $scope.$$entity = {
                identifier: null,
                name: null,
                description: null,
                actions: []
            };

            $scope.$$tinyEntity = {
                data: {
                    profile: null
                },
                populate: function () {
                    this.data.profile = $ng.copy($scope.$$entity);
                    this.data.profile.active = this.data.profile.active ? 1 : 0;
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function (data) {
                $scope.$$entity.identifier = data.entity.identifier;
                $scope.$$entity.active = data.entity.active;
                $scope.$$entity.name = data.entity.name;
                $scope.$$entity.description = data.entity.description;
                $scope.$$operations = data.operations;
            };

        }]);
});