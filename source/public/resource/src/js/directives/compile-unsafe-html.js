/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('compileUnsafeHtml', ['$compile', function ($compile) {
            return function (scope, element, attrs) {
                var listenHtml = scope.$watch(
                        function (scope) {
                            // watch the 'compileUnsafeHtml' expression for changes
                            return scope.$eval(attrs.compileUnsafeHtml);
                        },
                        function (value) {
                            // when the 'compileUnsafeHtml' expression changes
                            // assign it into the current DOM
                            element.html(value);
                            // compile the new DOM and link it to the current
                            // scope.
                            // NOTE: we only compile .childNodes so that
                            // we don't get into infinite loop compiling ourselves
                            $compile(element.contents())(scope);
                        }
                );

                var listenDestroy = scope.$on('$destroy', function () {
                    listenHtml();
                    listenDestroy();
                });
            };
        }]);

});