/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$factories.factory('$$http', ['$rootScope', '$http', '$httpParamSerializerJQLike', '$q', '$$alert', function ($rootScope, $http, $httpParamSerializerJQLike, $q, $$alert) {

            var _url = '../private/';

            var _canceler = null;
            var _canceledRequest = null;
            //var _eventName = 'performing.http_request';

            var _overlay = {
                element: null,
                show: function () {
                    if (this.element === null) {
                        this.element = $ng.element('<aside class="overlay-loader" tabindex="0"></aside>');
                        var cancelBtn = $ng.element('<button class="button warning">Cancelar</button>').bind('click', function ($event) {
                            _canceler.resolve();
                            _canceledRequest = true;
                        });
                        this.element.append($ng.element('<span></span>').append($ng.element('<div class="button-container"></div>').append(cancelBtn)));
                        $ng.element(document.body).append(this.element);
                    }
                },
                remove: function () {
                    if (this.element !== null) {
                        this.element.remove();
                        this.element = null;
                    }
                }
            };

            var _purgueParametes = function (param) {
                if ((typeof param) !== 'object') {
                    $$alert.error('Error de parametro general de entrada');
                    return false;
                }
                if ((typeof param.url) !== 'string') {
                    param.url = _url;
                }
                if ((typeof param.method) !== 'string') {
                    param.method = 'POST';
                }
                if ((typeof param.contentType) !== 'string') {
                    param.contentType = 'application/x-www-form-urlencoded';
                }
                if ((typeof param.data) !== 'object') {
                    param.data = null;
                }
                if (param.contentType === 'application/x-www-form-urlencoded') {
                    param.data = $httpParamSerializerJQLike(param.data);
                } else if (param.contentType === 'multipart/form-data') {
                    param.contentType = undefined;
                }
                if ((typeof param.overlay) !== 'boolean') {
                    param.overlay = true;
                }
                if ((typeof param.acknowledgement) !== 'boolean') {
                    param.acknowledgement = true;
                }

                if ((typeof param.successCallback) !== 'function') {
                    param.successCallback = null;
                }

                if ((typeof param.failCallback) !== 'function') {
                    param.failCallback = null;
                }

                if ((typeof param.startCallback) !== 'function') {
                    param.startCallback = null;
                }

                if ((typeof param.finalCallback) !== 'function') {
                    param.finalCallback = null;
                }

                param.confirmationMsg = '¿Deseas continuar?';
                if ((typeof param.confirmation) === 'string') {
                    param.confirmationMsg = param.confirmation;
                    param.confirmation = true;
                } else if ((typeof param.confirmation) !== 'boolean') {
                    param.confirmationMsg = null;
                    param.confirmation = false;
                }
                return true;
            };

            var _execResponseCallback = function (response) {
                if (response !== undefined && response.callback !== undefined && response.callback !== null) {
                    eval(response.callback);
                }
            };

            var _request = function (param) {
                if (param.overlay) {
                    _overlay.show();
                }
                if (param.startCallback !== null) {
                    param.startCallback();
                }
                _canceler = $q.defer();
                _canceledRequest = false;
                var httpPromise = $http({
                    method: param.method,
                    url: param.url,
                    data: param.data,
                    headers: {
                        'Content-Type': param.contentType
                    },
                    transformRequest: $ng.identity,
                    timeout: _canceler.promise
                });

                httpPromise.success(function (response, status, headers, config) {
                    if (response.success) {
                        if (param.type === 'behind') {
                            if (param.acknowledgement) {
                                $$alert.notification.success(response.content, function () {
                                    if (param.successCallback !== null) {
                                        param.successCallback(response);
                                    }
                                    _execResponseCallback(response);
                                });
                            } else if (param.successCallback !== null) {
                                param.successCallback(response);
                                _execResponseCallback(response);
                            }
                        } else if (param.successCallback !== null) {
                            param.successCallback(response);
                            _execResponseCallback(response);
                        }
                    } else {
                        $$alert.notification.warning(response.content, function () {
                            if (param.failCallback !== null) {
                                param.failCallback();
                            }
                            _execResponseCallback(response);
                        });
                    }
                }).error(function (data, status, headers, config) {
                    if (_canceledRequest) {
                        $$alert.notification.warning('Se ha cancelado la petición');
                    } else if ((typeof data) === 'object' && data.content !== undefined) {
                        $$alert.notification.error(data.content);
                    } else {
                        $$alert.notification.error('Se ha producido un error inesperado');
                    }
                }).finally(function () {
                    if (param.overlay) {
                        _overlay.remove();
                    }
                    if (param.finalCallback !== null) {
                        param.finalCallback();
                    }
                });
            };

            return {
                /**
                 * request
                 *
                 * Ejecuta una peticion ajax
                 *
                 * @returns {undefined}
                 * @param {json} param Todos los datos de entradas
                 * @param {json} param.data Los datos que se envian (required)
                 * @param {json} param.type El tipo de peticion [front, behind] (required)
                 * @param {json} param.loader El tipo de peticion [front, behind] (optional)
                 * @param {function} param.successCallback la funciona ejecutar en caso de success (optional)
                 * @param {function} param.cancelCallback la funciona ejecutar en caso de que el usuario presione NO en la pregunta de confirmacion
                 * @param {function} param.failCallback la funciona ejecutar en caso de fail (optional)
                 * @param {function} param.finalCallback la funciona ejecutar al final de la operacion (optional)
                 * @param {string / bool} param.confirmation Si se pide confirmacion antes del submit (optional)
                 * @param {bool} param.acknowledgement Acuse de recibo, tras success o fail (optional)
                 *
                 */
                request: function (param) {

                    if (!_purgueParametes(param)) {
                        return;
                    }

                    if (param.confirmation) {
                        $$alert.dialog.confirmation(param.confirmationMsg, function () {
                            _request(param);
                        }, function () {
                            ///if cancel
                        });
                    } else {
                        _request(param);
                    }
                },
                url: _url
            };
        }]);
});