/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'alertify', 'angular'], function (modules, alertify, $ng) {

    return modules.$$factories.factory('$$alert', ['$rootScope', '$compile', '$log', '$controller', function ($rootScope, $compile, $log, $controller) {

            var _wait = 4;

            alertify.defaults.theme.ok = 'button success';
            alertify.defaults.theme.cancel = 'button alert';
            alertify.defaults.transition = 'pulse';

            alertify.dialog('my_window', function () {
                return{
                    main: function (data) {
                        this.message = data.template;


                        this.setting('title', data.title);
                        this.setting('controllerName', data.controllerName);
                        this.setting('controllerData', data.controllerData);
                        this.setting('startMaximized', data.maximized);
                        this.setting('closableByDimmer', true);
                        this.setting('transition', 'zoom');
                        this.setting('closableByEsc', false);
                    },
                    prepare: function () {
                        this.elements.footer.parentNode.removeChild(this.elements.footer);
                        this.elements.content.style.bottom = '0px';

                        if (this.setting('controllerName') !== undefined && this.setting('controllerName') !== null) {
                            var scope = $rootScope.$new();

                            this.elements.root.setAttribute('data-remove-dom', null);
                            this.elements.dialog.setAttribute('data-ng-controller', this.setting('controllerName'));
                            this.elements.dialog.setAttribute('data-ng-init', '$$initController(' + JSON.stringify(this.setting('controllerData')) + ');');
                            this.setContent(this.message);

                            var __compiled__ = $compile(this.elements.root)(scope);

                            __compiled__.on('$destroy', function () {
                                scope.$destroy();
                            });

                        }
                    },
                    callback: function (closeEvent) {
                        closeEvent.cancel = true;
                        var $this = this;
                        _dialog_confirmation('Vas a cerrar esta ventana, los cambios<br/> sin guardar se perderán, ¿Continuar?', function () {
                            $this.close();
                        });
                    },
                    settings: {
                        controllerName: null,
                        controllerData: null,
                        id: null
                    },
                    hooks: {
                        onshow: function () {
                            this.resizeTo('80%', '80%');
                            this.set('autoReset', false);
                        },
                        onclose: function () {
                            $ng.element(this.elements.root).remove();
                        }
                    }
                };
            }, true);

            var _dialog_success = function (message, callback) {
                if ((typeof callback) === 'function') {
                    callback();
                }
                $log.info(message);
                alertify.alert('Exito', message);
            };

            var _dialog_confirmation = function (message, okCallback, cancelCallback) {
                alertify.confirm(message)
                        .set('title', 'Confirmación requerida')
                        .set('onok', function (closeEvent) {
                            if ((typeof okCallback) === 'function') {
                                okCallback();
                            }
                        })
                        .set('oncancel', function (closeEvent) {
                            if ((typeof cancelCallback) === 'function') {
                                cancelCallback();
                            }
                        })
                        .set('labels', {
                            ok: '<u><b>SI</b></u>, continuar',
                            cancel: '<u><b>NO</b></u>, cancelar'
                        })
                        .set('closableByDimmer', false);
            };

            var _dialog_window = function (data) {
                //response.title, response.content, response.controller
                alertify.my_window(data);
            };

            var _noti_success = function (message, callback) {
                if ((typeof callback) === 'function') {
                    callback();
                }
                $log.info(message);
                alertify.notify('<span style="color: #000">' + message + '<span>', 'success', _wait);
            };

            var _noti_error = function (message, callback) {
                if ((typeof callback) === 'function') {
                    callback();
                }
                $log.error(message);
                alertify.notify(message, 'error', _wait);
            };

            var _noti_warning = function (message, callback) {
                if ((typeof callback) === 'function') {
                    callback();
                }
                $log.warn(message);
                alertify.notify(message, 'warning', _wait);
            };

            return {
                dialog: {
                    success: _dialog_success,
                    confirmation: _dialog_confirmation,
                    window: _dialog_window
                },
                notification: {
                    success: _noti_success,
                    error: _noti_error,
                    warning: _noti_warning
                },
                closeAll: function () {
                    alertify.closeAll();
                }
            };
        }]);
});