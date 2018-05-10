/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$factories.factory('$$performAction', ['$$uiTabsProvider', '$$http', '$$validate', '$$alert', function ($$uiTabsProvider, $$http, $$validate, $$alert) {

            var __performAction__ = function (action, actionData, callbacks, acknowledgement) {

//                if (actionData === undefined) {
//                    actionData = null;
//                }

//                if (callbacks === undefined || callbacks === null) {
//                    callbacks = {
//                        start: null,
//                        success: null,
//                        final: null
//                    };
//                }

                var __run__ = function () {

                    var runMode = parseInt(action.run_mode);

                    var __tab__ = null;
                    var __title__ = '<i class="fa ' + action.icon + ' fa-lg" style="color: ' + action.icon_color + '"></i> ' + action.title;

                    if (runMode === 0) {
                        __tab__ = {
                            identifier: action.identifier,
                            title: __title__
                        };
                        if (!$$uiTabsProvider.add(__tab__)) {
                            return;
                        }
                    }

                    var __type__ = (runMode === 2) ? 'behind' : 'front';

                    $$http.request({
                        data: {
                            $$request: action.identifier,
                            $$data: actionData
                        },
                        type: __type__,
                        overlay: true,
                        confirmation: false,
                        acknowledgement: acknowledgement,
                        startCallback: function () {
                            if (callbacks !== undefined && callbacks !== null && (typeof callbacks.start) === 'function') {
                                callbacks.start();
                            }
                        },
                        successCallback: function (response) {
                            if (callbacks !== undefined && callbacks !== null && (typeof callbacks.success) === 'function') {
                                callbacks.success({$$data: response.content});
                            }
                            //hidden
                            if (runMode === 2) {
                                return;
                            }

                            //response.content = {template, controller, controllerData, properties}
                            var __controller__ = $$validate.controller(response.content.controller) ? response.content.controller : undefined;
                            var __template__ = response.content.template;

                            //tab
                            if (runMode === 0) {
                                __tab__.content = (__controller__ !== undefined) ? '<div class="controller-container" data-ng-controller="' + __controller__ + '" data-ng-init=\'$$initController(' + JSON.stringify(response.content.controllerData) + ')\'>' + __template__ + '</div>' : '<div class="no-controller-container">' + __template__ + '</div>';
                                return;
                            }

                            //dialog
                            //response.content.properties = {maximized, ..}

                            var properties = JSON.parse(response.content.properties);

                            $$alert.dialog.window({
                                title: __title__,
                                template: __template__,
                                controllerName: __controller__,
                                controllerData: response.content.controllerData,
                                maximized: properties.maximized
                            });
                        },
                        finalCallback: function () {
                            if (callbacks !== undefined && callbacks !== null && (typeof callbacks.final) === 'function') {
                                callbacks.final();
                            }
                        }
                    });
                };

                if (action.confirm) {
                    var confirmationMsg = '<i class="fa ' + action.icon + ' fa-lg" style="color: ' + action.icon_color + '"></i> ' + action.title + '<br/>' + '¿Continuar?';
                    $$alert.dialog.confirmation(confirmationMsg, __run__);
                } else {
                    __run__();
                }
            };

            return __performAction__;
        }]);
});