/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'jquery', 'jstree'], function (modules, $) {

    return modules.$$directives.directive('jsTree', ['$$http', '$rootScope', '$$performAction', function ($$http, $rootScope, $$performAction) {
            return {
                restrict: 'A',
                scope: {
                    request: '=jsTree'
                },
                link: function (scope, element, attrs, ctrl) {

                    $(element).jstree({
                        'plugins': [
                            'state',
                            'wholerow'
                        ],
                        'core': {
                            "multiple": false,
                            "animation": 100,
                            'data': function (node, callback) {
                                var _root = (node.a_attr === undefined) ? null : node.a_attr['data-identifier'];
                                $$http.request({
                                    data: {
                                        $$request: scope.request,
                                        $$data: {
                                            __js_root__: [_root]
                                        }
                                    },
                                    type: 'front',
                                    overlay: false,
                                    successCallback: function (response) {
                                        callback.call(this, response.content);
                                    }
                                });
                            },
                            'themes': {
                                'name': 'proton',
                                'responsive': true
                            }
                        }
                    }).on('activate_node.jstree', function (event, selected) {
                        if (!selected.node.a_attr["data-leaft"]) {
                            event.preventDefault();
                            event.stopPropagation();
                            return;
                        }
                        var action = JSON.parse(selected.node.a_attr["data-action-data"]);
                        $$performAction(action, null, null, false);

                        //$rootScope.$emit("$$jstree-leaft-clicked", );
                        //console.log(selected.node.a_attr["data-action-data"]);
                        document.querySelector('.exit-off-canvas').click();
                        //$('.exit-off-canvas').trigger("click");
                    });

                    var listenRefresh = $rootScope.$on('$$jstree-refresh', function (event, args) {
                        $(element).jstree('refresh');
                    });

                    var listenDestroy = scope.$on('$destroy', function () {
                        listenRefresh();
                        listenDestroy();
                    });

                }
            };
        }]);

});