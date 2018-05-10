/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$kernel.controller('index_controller', ['$scope', '$location', '$$http', '$log', '$route', function ($scope, $location, $$http, $log, $route) {

            $scope.page = {
                access: false,
                title: null,
                app: null,
                user: null,
                operations: null,
                allDone: false,
                solving: false,
                start: function () {
                    $$http.request({
                        data: {
                            $$request: '8a4b006e3c48b85e83de2233961482700c2997fb8200be4e385a4b8d8285ae91' //user-handler | init-app
                        },
                        type: 'front',
                        overlay: false,
                        startCallback: function(){
                            $scope.page.allDone = false;
                            $scope.page.solving = true;
                        },
                        successCallback: function (response) {
                            $scope.page.access = response.content.access;
                            $scope.page.title = response.content.app.title;
                            $scope.page.app = response.content.app;
                            $scope.page.user = response.content.user;
                            $scope.page.operations = response.content.operations;
                        },
                        finalCallback: function () {
                            $scope.page.allDone = true;
                            $route.reload();
                            var __path__ = $scope.page.access ? '/home' : '/login';
                            $location.path(__path__);
                        }
                    });
                }
            };

            $scope.$on('$routeChangeStart', function (event, next, current) {
                if (!$scope.page.allDone) {
                    event.preventDefault();
                    return;
                }
                $scope.page.solving = true;
                var __access__ = $scope.page.access;
                if (__access__ && next.pathParams.redirectTo !== '/home') {
                    $location.path('/home');
                } else if (!__access__ && next.pathParams.redirectTo !== '/login') {
                    $log.info('Debes iniciar sesión!!');
                    $location.path('/login');
                }
            });

            $scope.$on('$routeChangeSuccess', function (event, current, previous) {
                $scope.page.solving = false;
            });

            $scope.page.start();



        }]);
});