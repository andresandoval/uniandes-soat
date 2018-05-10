/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('onScroll', ['$parse', function ($parse) {

            return {
                scope: {
                    callback: '&onScroll'
                },
                link: function (scope, element, attrs, ctrl) {
                    //var fn = $parse(attrs.rightClick);

                    var callback = function (event) {
                        scope.callback();
                    };

                    element.bind('scroll', callback);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('scroll', callback);
                        listenDestroy();
                    });
                }
            };


        }]);

});