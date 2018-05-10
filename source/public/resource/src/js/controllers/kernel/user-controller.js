/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'md5'], function (modules, $ng, md5) {

    return modules.$$kernel.controller("user_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope, $$alert) {

            $scope.$$operations = {
                process: {},
                retrieveProfileList: {},
                retrieveDepartmentList: {}
            };

            $scope.$$elements = {
                login: {
                    title: 'Login',
                    required: true,
                    maxlength: 64
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si el usuario está activo o no'
                },
                profile: {
                    title: 'Perfil',
                    required: true,
                    options: null,
                    populate: function () {
                    }
                },
                department: {
                    title: 'Departamento',
                    required: false,
                    options: null,
                    populate: function () {
                    }
                },
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 64
                },
                last_name: {
                    title: 'Apellido',
                    required: true,
                    maxlength: 64
                },
                email: {
                    title: 'Email',
                    required: true,
                    maxlength: 64
                },
                password: {
                    title: 'Contraseña',
                    required: true
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
                description: null,
                last_update_date: null
            };

            $scope.$$tinyEntity = {
                data: {
                    user: null
                },
                populate: function () {
                    this.data.user = $ng.copy($scope.$$entity);
                    this.data.user.password = (typeof this.data.user.password === 'string') ? this.data.user.password = md5(this.data.user.password) : null;
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function (data) {
                $scope.$$operations = data.operations;
                $scope.$$entity = data.entity;
                $scope.$$entity.profile_identifier = (data.entity.profile_identifier === null) ? null : data.entity.profile_identifier.toString();
                $scope.$$entity.department_identifier = (data.entity.department_identifier === null) ? null : data.entity.department_identifier.toString();
                $scope.$$elements.password.required = (data.entity.identifier === null);
            };

        }]);
});