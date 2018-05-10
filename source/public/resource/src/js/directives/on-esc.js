/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('onEsc', ['$document', function ($document) {

            return {
                scope: {
                    callback: '&onEsc'
                },
                link: function (scope, element, attrs, ctrl) {

                    var callback = function (event) {
                        if (event.keyCode === 27) {
                            scope.callback();
                        }
                    };

                    $document.bind('keyup', callback);

                    var listenDestroy = scope.$on('$destroy', function () {
                        $document.unbind('keyup', callback);
                        listenDestroy();
                    });
                }
            };


        }]);

});