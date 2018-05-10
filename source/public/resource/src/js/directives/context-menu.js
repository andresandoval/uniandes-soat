/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$directives.directive('contextMenu', ['$compile', '$rootScope', '$document', function ($compile, $rootScope, $document) {

            var contextTemplate = '<ul class="f-dropdown context-menu">\
                                    <li data-ng-repeat="(key, action) in actions">\
                                        <line data-perform-action="action" data-data="rowIdentifier" data-callback="internalCallback()"></line>\
                                    </li>\
                                  </ul>';

            var initialState = {
                visibility: 'hidden',
                left: '-5000px',
                top: '-5000px'
            };

            var getCoordinates = function (context, event) {
                var contextWidth = context[0].offsetWidth;
                var contextHeight = context[0].offsetHeight;
                var xCurPos = event.clientX;
                var yCurPos = event.screenY;
                var xCurDif = ((xCurPos + contextWidth) > screen.width) ? contextWidth : 0;
                var yCurDif = ((yCurPos + contextHeight) > screen.height) ? contextHeight : 0;
                return {
                    y: (event.clientY - yCurDif) + 'px', //top
                    x: (event.clientX - xCurDif) + 'px' //left
                };
            };

            return {
                restrict: 'A',
                scope: {
                    actions: "=contextMenu",
                    rowIdentifier: "=identifier",
                    callback: "&contextCallback"
                },
                link: function (scope, element, attrs, ctrl) {
                    element.attr({
                        'data-has-dropdown': false
                    });
                    if (scope.actions === undefined || scope.actions === null || scope.actions.length <= 0) {
                        return;
                    }
                    scope.internalCallback = function () {
                        if (typeof scope.callback === 'function') {
                            scope.callback();
                        }
                    };
                    var context = $ng.element(contextTemplate).css(initialState);
                    var openContext = function (event) {
                        $rootScope.$emit('$$close-context-menu', null);
                        var coordinates = getCoordinates(context, event);
                        context.css({
                            visibility: 'visible',
                            left: coordinates.x,
                            top: coordinates.y
                        });
                        element.attr({
                            'data-has-dropdown': true
                        });
                    };
                    var closeContext = function () {
                        context.css(initialState);
                        element.attr({
                            'data-has-dropdown': false
                        });
                    };

                    $ng.element(document.body).append($compile(context)(scope));

                    element.bind('contextmenu', openContext);
                    $document.bind("click", closeContext);
                    $rootScope.$on('$$close-context-menu', function (event, data) {
                        closeContext();
                    });
                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('contextmenu', openContext);
                        $document.unbind("click", closeContext);
                        context.remove();
                        listenDestroy();
                    });


                }
            };
        }]);

});