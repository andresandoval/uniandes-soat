/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('wheelClick', ['$parse', function ($parse) {

            return {
                link: function (scope, element, attrs, ctrl) {
                    var fn = $parse(attrs.wheelClick);

                    var callback = function (event) {
                        if (event.which === 2) {
                            scope.$apply(function () {
                                event.preventDefault();
                                fn(scope, {$event: event});
                            });
                        }
                    };

                    element.bind('click', callback);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('click', callback);
                        listenDestroy();
                    });
                }
            };

        }]);

});