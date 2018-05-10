/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['angular', 'directives', 'factories', 'filters', 'controllers'], function ($ng, directives, factories, filters, controllers) {
    var app = $ng.module('app', [
        //angular route module
        'ngRoute',
        //apis
        'ui.select',
        'ui.date',
        'mm.foundation',
        'mm.foundation',
        'angular-loading-bar',
        'angular.filter',
        'ja.qr',
        'ui.ace',
        'angular-timeline',
        'angularCharts',
        //angular modules
        'kernel-directive',
        'kernel-factory',
        'kernel-filter',
        //app modules
        'kernel'
    ]).config(['$routeProvider', 'paginationConfig', 'uiSelectConfig', function ($routeProvider, paginationConfig, uiSelectConfig) {
            //cfpLoadingBarProvider.includeSpinner = false;

            $routeProvider.when('/login', {
                templateUrl: '../private/template/kernel/login-tmpl.html',
                controller: 'login_controller'
            }).when('/home', {
                templateUrl: '../private/template/kernel/home-tmpl.html',
                controller: 'home_controller'
            }).otherwise({
                redirectTo: '/login'
            });

            paginationConfig.boundaryLinks = true;
            paginationConfig.directionLinks = true;
            paginationConfig.firstText = "..Inicio";
            paginationConfig.itemsPerPage = 10;
            paginationConfig.lastText = "Fin..";
            paginationConfig.nextText = "Sig.";
            paginationConfig.previousText = "Ant.";
            paginationConfig.rotate = false;

            uiSelectConfig.theme = 'select2';
            uiSelectConfig.resetSearchInput = false;
            uiSelectConfig.appendToBody = false;
        }]);

    app.init = function () {
        $ng.bootstrap(document.querySelector("html"), ['app']);
    };

    return app;
});