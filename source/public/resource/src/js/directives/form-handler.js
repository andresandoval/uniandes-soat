/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['angular', 'app-modules', 'md5'], function ($ng, modules, md5) {

    var __elementTemplate__ = {
        label: '<input type="text" placeholder="{{formElement.title}}" data-ng-readonly="true"/>',
        text: '<input type="text" placeholder="{{formElement.title}}" data-ng-required="formElement.required" maxlength="{{formElement.maxlength}}" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}"/>',
        password: '<div class="row collapse"><div class="small-1 columns"><button class="button secondary postfix" data-ng-click="passwordType.toggle()"><i class="fa fa-lg" data-ng-class="passwordType.icon()"></i></button></div><div class="small-11 columns"><input type="{{passwordType.type}}" placeholder="{{formElement.title}} [{{passwordType.placeholder()}}]" data-ng-required="formElement.required" data-valid="{{valid}}" data-ng-model="model"/></div></div>',
        'simple-password': '<input type="password" placeholder="{{formElement.title}} [{{passwordType.placeholder()}}]" data-ng-required="formElement.required" data-valid="{{valid}}"/>',
        textarea: '<textarea placeholder="{{formElement.title}}" data-ng-required="formElement.required" maxlength="{{formElement.maxlength}}" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}"></textarea>',
        //select_: '<select data-ng-required="formElement.required" data-valid="{{valid}}" data-ng-options="key as value for (key, value) in formElement.options"></select>',
        select: '<div class="row collapse">\
                    <div class="small-1 columns" data-ng-if="selectType.applyDefault()">\
                        <button class="button prefix secondary radious" data-ng-click="selectType.reset()" title="Anular selección"><i class="fa fa-times fa-lg"></i></button>\
                    </div>\
                    <div class="columns" data-ng-class="selectType.columnWidth()">\
                        <select data-ng-required="formElement.required" data-valid="{{valid}}" data-ng-options="key as value for (key, value) in formElement.options | orderBy: \'value\'" data-ng-model="model" data-ng-change="ngChange"></select>\
                    </div>\
                    <div class="small-1 columns" data-ng-if="populateAction !== undefined">\
                        <button-icon class="button postfix secondary" data-perform-action="populateAction" data-icon-only data-auto-play data-acknowledgement="false" data-callback="formElement.options = $$data;"></button-icon>\
                    </div>\
                </div>',
        ci: '<input type="text" data-ng-required="formElement.required" maxlength="10" data-ng-maxlength="10" data-valid="{{valid}}" placeholder="# CI"/>',
        ruc: '<input type="text" data-ng-required="formElement.required" maxlength="13" data-ng-maxlength="13" data-valid="{{valid}}" placeholder="# RUC"/>',
        email: '<input type="email" data-ng-required="formElement.required" maxlength="{{formElement.maxlength}}" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}" placeholder="{{formElement.title}}"/>',
        phone: '<input type="tel" data-ng-required="formElement.required" maxlength="{{formElement.maxlength}}" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}" placeholder="{{formElement.title}}"/>',
        date: '<input type="date" data-ng-required="formElement.required" maxlength="{{formElement.maxlength}}" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}"/>',
        integer: '<input type="text" data-ng-required="formElement.required" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}" data-only-numbers data-decimal="false"/>',
        decimal: '<input type="text" data-ng-required="formElement.required" data-ng-maxlength="{{formElement.maxlength}}" data-valid="{{valid}}" data-only-numbers data-decimal="true"/>',
        color: '<input type="color" data-ng-required="formElement.required" data-valid="{{valid}}"/>',
        switch : '<label title="Elemento de dos estados I/0, {{formElement.tooltip}}">\
                    {{formElement.title}}\
                    <div class="switch">\
                        <input id="{{elementId}}" type="checkbox" data-ng-model="model">\
                        <label for="{{elementId}}"></label>\
                    </div>\
                </label>'
    };

    return modules.$$directives.directive('formHandler', [function () {
            var uniqueId = 0;

            return {
                restrict: 'E',
                transclude: true,
                scope: {
                    onChange: '&',
                    formData: '=',
                    submitAction: '=',
                    submitCallback: '&',
                    closeOnSubmit: '@'
                },
                require: ['?^^uiTabBody', '?^^removeDom'],
                template: function (element, attr) {

                    if (attr['noLayout'] !== undefined) {
                        return '<ng-form data-ng-transclude></ng-form>';
                    }
                    var __form_id__ = '__' + md5(uniqueId.toString() + '_form_element') + '__';

                    return '<ng-form name="' + __form_id__ + '" class="form-wrapper">\
                                <div class="form-body" data-ng-transclude>\
                                </div>\
                                <div class="form-footer">\
                                    <div class="row">\
                                        <div class="small-9 columns">\
                                            <button data-ng-show="' + __form_id__ + '.$dirty" class="button expand" style="text-overflow: ellipsis; white-space: nowrap;overflow: auto; padding-left: 5px; padding-right: 5px; cursor: pointer" disabled data-ng-class="valid && \'success\' || \'alert\'" title="{{status}}">{{status}}</button>\
                                        </div>\
                                        <div class="small-3 columns text-right">\
                                            <button data-ng-disabled="!valid" class="button radius success" data-perform-action="submitAction" data-callback="formSuccessCallback()" data-data="formData"></button>\
                                        </div>\
                                    </div>\
                                </div>\
                           </ng-form>';
                },
                link: function (scope, element, attr, controller) {

                    //layout
                    element.addClass('form-container');

                    //scope
                    scope.formSuccessCallback = function () {
                        if (scope.submitCallback !== undefined) {
                            scope.submitCallback();
                        }
                        if (scope.closeOnSubmit !== undefined) {
                            if (controller[0] !== null) {
                                controller[0].close();
                            } else if (controller[1] !== null) {
                                controller[1].remove();
                            }
                        }
                    };
                },
                controller: function ($scope) {
                    $scope.valid = false;
                    $scope.status = "Hay campos con errores!!!";
                    $scope.elements = {}; //key : value (string or bool)

                    this.addElement = function (key, elem) {
                        $scope.elements[key] = elem;
                        $scope.valid = true;
                        $scope.status = "Todos los campos estan correctos!!";
                        $ng.forEach($scope.elements, function (value, key) {
                            if ($scope.valid) {
                                if (value !== true) {
                                    $scope.valid = false;
                                    $scope.status = value;
                                }
                            }
                        });
                    };
                    this.triggerChange = function () {
                        if ($scope.onChange !== undefined) {
                            $scope.onChange();
                        }
                    };
                    this.getValid = function () {
                        return $scope.valid;
                    };
                }
            };

        }]).directive('inputElement', ['$$validate', '$parse', function ($$validate, $parse) {
            var uniqueId = 0;

            return {
                restrict: 'E',
                require: ['?^^formHandler', '?ngModel'],
                template: function (element, attr) {
                    if (__elementTemplate__[attr['elementType']] !== undefined) {
                        return __elementTemplate__[attr['elementType']];
                    }
                    return '<div class="panel"><i class="fa fa-exclamation-triangle fa-lg" style="color: #FF8C00;"></i> El tipo de elemento no esta declarado</div>';
                },
                replace: true,
                scope: {
                    formElement: '=element',
                    model: '=ngModel',
                    populateAction: '=',
                    ngChange: '=',
                    myChange: '&',
                    default: '='
                },
                link: function (scope, element, attr, controllers) {
                    if (attr['elementType'] === 'label') {
                        return;
                    }
                    scope.valid = null;
                    scope.passwordType = {
                        type: 'password',
                        icon: function () {
                            return this.type === 'password' ? 'fa-eye-slash' : 'fa-eye';
                        },
                        toggle: function () {
                            this.type = this.type === 'password' ? 'text' : 'password';
                        },
                        placeholder: function () {
                            return scope.formElement.required ? 'Definir' : 'Sin alterar';
                        }
                    };
                    scope.selectType = {
                        columnWidth: function () {
                            var __start__ = 12;
                            if (scope.populateAction !== undefined) {
                                __start__--;
                            }
                            if (this.applyDefault()) {
                                __start__--;
                            }
                            return 'small-' + __start__;
                        },
                        reset: function () {
                            scope.model = scope.default;
                        },
                        applyDefault: function () {
                            return attr['default'] !== undefined;
                        },
                        runChange: function () {
                            if (scope.ngChange !== undefined) {
                                scope.ngChange();
                            }
                            if (scope.myChange !== undefined) {
                                scope.myChange();
                            }
                        }
                    };

                    scope.elementId = md5(uniqueId.toString() + '_input_element');
                    uniqueId++;
                    var __validate__ = function () {

                        var __validator__ = {
                            text: function () {
                                return $$validate.text(scope.model, scope.formElement.required, scope.formElement.maxlength);
                            },
                            password: function () {
                                return $$validate.text(scope.model, scope.formElement.required, 9999999);
                            },
                            'simple-password': function () {
                                return this.password();
                            },
                            textarea: function () {
                                return this.text();
                            },
                            color: function () {
                                return $$validate.text(scope.model, scope.formElement.required, 7);
                            },
                            select: function () {
                                return $$validate.option(scope.model, scope.formElement.required);
                            },
                            ci: function () {
                                return $$validate.ci(scope.model, scope.formElement.required);
                            },
                            ruc: function () {
                                return $$validate.ruc(scope.model, scope.formElement.required);
                            },
                            email: function () {
                                return $$validate.email(scope.model, scope.formElement.required, scope.formElement.maxlength);
                            },
                            phone: function () {
                                return $$validate.phone(scope.model, scope.formElement.required, scope.formElement.maxlength);
                            },
                            date: function () {
                                return $$validate.date(scope.model, scope.formElement.required);
                            },
                            integer: function () {
                                if($$validate.number(scope.model, scope.formElement.required)){
                                    if(typeof scope.formElement.minValue === "number"){
                                        if (parseFloat(scope.model) < parseFloat(scope.formElement.minValue)){
                                            return "Debe ingresar un numero mayor o igual a " + scope.formElement.minValue;
                                        }
                                    }
                                    if(typeof scope.formElement.maxValue === "number"){
                                        if (parseFloat(scope.model) > parseFloat(scope.formElement.maxValue)){
                                            return "Debe ingresar un numero menor o igual a " + scope.formElement.maxValue;
                                        }
                                    }
                                    return true;
                                }
                                return false;
                            },
                            decimal: function () {
                                return this.integer();
                            },
                            switch : function () {
                                return true;
                            }
                        };
                        var status = __validator__[attr['elementType']]();
                        scope.valid = (status === true);
                        var extra_text = (typeof status === "string") ? "\n" + status : "";
                        if (controllers[0] !== null) {
                            controllers[0].addElement(scope.elementId, status === true ? true : "El campo: " + scope.formElement.title.toString().toLowerCase() + " no es válido!!" + extra_text);
                            controllers[0].triggerChange();
                        }
                    };
                    var listenModel = scope.$watch('model', function (newValue, oldValue) {
                        if (newValue !== oldValue) {
                            __validate__();
                        }
                    }, true);
                    var selectTextOnClick = function (event) {
                        if (typeof this.select === 'function') {
                            this.select();
                        }
                    };
                    element.bind('click', selectTextOnClick);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('click', selectTextOnClick);
                        listenModel();
                        listenDestroy();
                    });

                    __validate__();
                }
            };

        }]).directive('customValiadation', ['$parse', function ($parse) {
            var uniqueId = 0;

            return {
                restrict: 'A',
                require: ['^^formHandler', '^^form'],
                scope: false,
                link: function (scope, element, attr, controllers) {

                    scope.elementId = md5(uniqueId.toString() + '_custom_validation');
                    uniqueId++;
                    var listenStatus = scope.$watch(function () {
                        return scope.$eval(attr.customValiadation);
                    }, function (newValue, oldValue) {
                        if (newValue !== oldValue) {
                            __validate__();
                        }
                    });
                    var __validate__ = function () {
                        var __status__ = scope.$eval(attr.customValiadation);
                        controllers[0].addElement(scope.elementId, __status__);
                        controllers[0].triggerChange();
                        controllers[1].$setDirty();
                    };
                    __validate__();
                    var listenDestroy = scope.$on('$destroy', function () {
                        listenStatus();
                        listenDestroy();
                    });
                    controllers[1].$setPristine();
                }
            };

        }]).directive('select2Element', ['$$validate', function ($$validate) {
            var uniqueId = 0;

            return {
                restrict: 'A',
                require: ['^^formHandler', 'ngModel', 'uiSelect'],
                scope: false,
                link: function (scope, element, attr, controllers) {

                    scope.formElement = scope.$parent.$eval(attr.select2Element);
                    scope.model = null;
                    if ((typeof scope.formElement) !== 'object') {
                        throw new Error('El elemento deben ser un objeto en select2Element');
                        return;
                    }

                    var key = md5(uniqueId.toString() + '_select2_element');
                    uniqueId++;
                    var __validate__ = function () {
                        scope.model = scope.$parent.$eval(attr.ngModel);
                        var status = $$validate.object(scope.model, scope.formElement.required);
                        controllers[0].addElement(key, status === true ? true : "El campo: " + scope.formElement.title.toString().toLowerCase() + " no es válido!!");
                        element.attr({
                            'data-required': scope.formElement.required,
                            'data-valid': (status === true)
                        });
                        controllers[0].triggerChange();
                    };
                    var listenElement = scope.$watch('formElement', function (newValue, oldValue) {
                        if (newValue !== oldValue) {
                            __validate__();
                        }
                    }, true);
                    var listenModel = scope.$watch(function () {
                        return scope.$parent.$eval(attr.ngModel);
                    }, function (newValue, oldValue) {
                        if (newValue !== oldValue) {
                            __validate__();
                        }
                    }, true);
//                    var listenModel = scope.$watch(function () {
//                        return scope.$parent.$eval(attr.ngModel);
//                    }, function (newValue, oldValue) {
//                        if (newValue !== oldValue) {
//                            __validate__();
//                        }
//                    }, true);
                    __validate__();
                    var listenDestroy = scope.$on('$destroy', function () {
                        listenElement();
                        listenModel();
                        listenDestroy();
                    });
                }
            };

        }]).directive('formHandlerSubmit', [function () {
            return {
                restrict: 'A',
                require: ['^^formHandler', 'performAction'],
                link: function (scope, element, attr, controllers) {
                    var listenStatus = scope.$watch(function () {
                        return controllers[0].getValid();
                    }, function (newValue) {
                        controllers[1].setEnabled(newValue);
                    });
                    var listenDestroy = scope.$on('$destroy', function () {
                        listenStatus();
                        listenDestroy();
                    });
                }
            };
        }]);
});