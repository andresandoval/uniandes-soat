/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('performAction', ['$$performAction', function ($$performAction) {

            var __elementTemplate__ = {
                button: '<button data-ng-mouseup="runAction()" style="cursor: pointer" title="{{action.title}}"><i class="fa fa-lg" data-ng-class="processing && \'fa-refresh fa-spin\' || action.icon"></i>  {{action.name}}</button>',
                'button-icon': '<button data-ng-mouseup="runAction()" style="cursor: pointer" title="{{action.title}}"><i class="fa fa-lg" data-ng-class="processing && \'fa-refresh fa-spin\' || action.icon"></i></button>',
                icon: '<i data-ng-mouseup="runAction()" class="fa fa-lg action" data-ng-class="processing && \'fa-refresh fa-spin\' || action.icon" title="{{action.title}}"></i>',
                line: '<div data-ng-mouseup="runAction()" class="row collapse" style="display: block; padding: 0.5rem">\
                         <div class="small-2 columns text-center"><i class="fa fa-lg" data-ng-class="processing && \'fa-refresh fa-spin\' || action.icon" data-ng-style="{\'color\': action.icon_color}"></i></div>\
                         <div class="small-10 columns">{{action.name}}</div>\
                       </div>'
            };

            return {
                scope: {
                    action: '=performAction',
                    data: '=',
                    callback: '&',
                    autoPlay: '@',
                    acknowledgement: '@'
                },
                restrict: 'A',
                replace: true,
                //priority: -1,
                template: function (element, attr) {
                    var tagName = element[0].tagName.toString().toLowerCase();
                    if (__elementTemplate__[tagName] !== undefined) {
                        return __elementTemplate__[tagName];
                    }
                    return __elementTemplate__.button;
                },
                link: function (scope, element, attrs, ctrl) {

                    scope.processing = false;
                    scope.disabled = false;

                    if (scope.action === undefined || scope.action === null) {
                        element.html('<i class="fa fa-exclamation-triangle fa-lg" title="@Operación indefinida"></i>');
                        return;
                    }

                    scope.runAction = function () {
                        var __callbacks = {
                            start: function () {
                                scope.processing = true;
                            },
                            success: scope.callback,
                            final: function () {
                                scope.processing = false;
                            }
                        };
                        $$performAction(scope.action, scope.data, __callbacks, scope.acknowledgement !== 'false');
                    };

                    if (scope.autoPlay !== undefined) {
                        scope.runAction();
                    }
                },
                controller: function ($scope, $element) {
                    this.setEnabled = function (enabled) {
                        $element.attr({
                            disabled: !enabled
                        });
                    };
                }
            };


        }]);

});