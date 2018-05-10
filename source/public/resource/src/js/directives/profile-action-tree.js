/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('profileActionTree', ['$$performAction', function ($$performAction) {

            return {
                restrict: 'E',
                scope: {
                    expandAction: "=",
                    profileIdentifier: "=",
                    node: "=",
                    tree: "=",
                    model: "="
                },
                template: function (element, attr) {
                    var __template__ = '<ul class="tree animated" data-ng-class="nodeOpen && \'fadeIn\' || \'fadeOut\'" data-ng-if="node.hasChildren" data-ng-show="nodeOpen">\
                                          <li data-ng-repeat="c in node.children" data-compile-unsafe-html="tmpHtml">\
                                          </li>\
                                       </ul>';

                    if (attr['node'] !== undefined) {
                        return '<span data-ng-switch="node.hasChildren">\
                                    <span data-ng-switch-when="true" data-ng-dblclick="clickOnNodeHandler()" class="link">\
                                        <i class="fa fa-lg action" data-ng-class="loading && \'fa-refresh fa-spin\' || nodeOpen && \'fa-caret-down\' || \'fa-caret-right\'" data-ng-click="clickOnNodeHandler()"></i>\
                                        &nbsp;<i class="fa fa-lg" data-ng-class="node.icon" data-ng-style="{color: node.iconColor}"></i>&nbsp;{{node.name}}\
                                    </span>\
                                    <span data-ng-switch-when="false">\
                                        <i class="fa fa-lg" data-ng-class="node.icon" data-ng-style="{color: node.iconColor}"></i>&nbsp;{{node.name}}\
                                    </span>\
                                </span>\
                                &nbsp;\
                                <i data-ng-if="node.type !== 0 && node.access === 0" class="fa fa-lg action" data-ng-class="node.assigned && \'fa-check-square-o\' || \'fa-square-o\'" data-ng-click="changeAssigned(true)"></i>\
                                &nbsp;\
                                <label data-ng-if="node.access !== 0" class="label success radius">Asignada [acceso : {{node.accessName}}]</label>' + __template__;
                    }

                    var __height__ = parseInt(attr['height']);
                    var __headerHeight__ = 50;
                    var __bodyHeight__ = __height__ - __headerHeight__;

                    return '<div style="height: ' + __height__ + 'px; min-height: ' + __height__ + 'px; max-height: ' + __height__ + 'px; overflow-y: hidden">\
                                <div style="width: 100%; height: ' + __headerHeight__ + 'px; min-height: ' + __headerHeight__ + 'px; max-height: ' + __headerHeight__ + 'px; overflow-y: hidden; border-bottom: 1px solid #ddd; line-height: ' + __headerHeight__ + 'px;">\
                                    <span style="float: left" class="link">\
                                        <i data-ng-if="node.hasChildren" class="fa fa-lg action" data-ng-class="loading && \'fa-refresh fa-spin\' || nodeOpen && \'fa-caret-down\' || \'fa-caret-right\'" data-ng-click="clickOnNodeHandler()"></i>\
                                        <span data-ng-dblclick="clickOnNodeHandler()">{{node.name}} : {{node.title}} </span>\
                                    </span>\
                                    <span style="float: right">{{model.length}} acciones seleccionadas</span>\
                                </div>\
                                <div style="width: 100%; height: ' + __bodyHeight__ + 'px; min-height: ' + __bodyHeight__ + 'px; max-height: ' + __bodyHeight__ + 'px; overflow-y: auto">\
                                    ' + __template__ + '\
                                </div>\
                            </div>';


                },
                require: '^^formHandler',
                link: function (scope, element, attrs, ctrl) {
                    scope.nodeOpen = false;
                    scope.loading = false;
                    scope.childrenLoading = false;
                    scope.tmpHtml = '<profile-action-tree data-node="c" data-expand-action="expandAction" data-profile-identifier="profileIdentifier" data-model="model"></profile-action-tree>';

                    scope.changeAssigned = function (click, status) {
                        if (scope.node === undefined || scope.node.identifier === null) {
                            return;
                        }
                        if (click) {
                            scope.node.assigned = !scope.node.assigned;
                        } else if (status !== undefined) {
                            scope.node.assigned = status;
                        }
                        var __index__ = scope.model.indexOf(scope.node.identifier);
                        if (__index__ > -1) {
                            scope.model.splice(__index__, 1);
                        }
                        if (scope.node.assigned) {
                            scope.model.push(scope.node.identifier);
                        }
                        ctrl.triggerChange();
                    };

                    scope.clickOnNodeHandler = function () {
                        if (scope.node === undefined || scope.node.children.length <= 0) {


                            var __callbacks = {
                                start: function () {
                                    scope.loading = true;
                                    scope.nodeOpen = false;
                                },
                                success: function (response) {
                                    if (scope.node !== undefined) {
                                        var __hasChildren__ = scope.node.hasChildren;
                                        var __assigned__ = scope.node.assigned;
                                    }
                                    scope.node = response.$$data;
                                    if (__hasChildren__ !== undefined) {
                                        scope.node.hasChildren = __hasChildren__;
                                        scope.node.assigned = __assigned__;
                                    }
                                },
                                final: function () {
                                    scope.loading = false;
                                    scope.nodeOpen = (scope.node.children.length > 0);
                                }
                            };
                            var __data__ = {
                                root_identifier: [scope.node === undefined ? null : scope.node.identifier],
                                profile_identifier: [scope.profileIdentifier]
                            };

                            $$performAction(scope.expandAction, __data__, __callbacks, false);
                        } else {
                            scope.nodeOpen = !scope.nodeOpen;
                        }
                    };

                    if (scope.node === undefined || scope.profileIdentifier !== null) {
                        scope.clickOnNodeHandler();
                    }
                    scope.changeAssigned(false);

                }
            };


        }]);

});