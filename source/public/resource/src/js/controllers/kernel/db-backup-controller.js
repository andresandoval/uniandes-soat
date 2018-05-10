/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular', 'md5'], function (modules, $ng, md5) {

    return modules.$$kernel.controller("db_backup_controller", ['$rootScope', '$scope', '$$alert', function ($rootScope, $scope, $$alert) {

            $scope.$$operations = {
                downloadFile: {}
            };

            $scope.$$layout = {
                success: false,
                backupFile: null,
                logFile: null
            };

            $scope.$$initController = function (data) {
                $scope.$$operations = data.operations;
                $scope.$$layout = data.layout;
            };

        }]);
});