/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'md5'], function (modules, md5) {

    return modules.$$kernel.controller('login_controller', ['$scope', function ($scope) {

            $scope.elements = {
                login: {
                    title: 'Usuario',
                    required: true,
                    maxlength: 64
                },
                password: {
                    title: 'Contraseña',
                    required: true,
                    maxlength: 128
                }
            };

            $scope.entity = {
                login: null,
                password: null
            };

            $scope.tinyEntity = {
                data: {
                    user: null
                },
                populate: function () {
                    $scope.tinyEntity.data.user = [md5($scope.entity.login) + md5($scope.entity.password)];
                }
            };

        }]);
});