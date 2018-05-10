/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('rightClick', ['$parse', function ($parse) {

            return {
                link: function (scope, element, attrs, ctrl) {
                    var fn = $parse(attrs.rightClick);

                    var callback = function (event) {
                        scope.$apply(function () {
                            event.preventDefault();
                            fn(scope, {$event: event});
                        });
                    };

                    element.bind('contextmenu', callback);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('contextmenu', callback);
                        listenDestroy();
                    });
                }
            };


        }]);

});