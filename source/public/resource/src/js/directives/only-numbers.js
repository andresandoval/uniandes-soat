/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('onlyNumbers', [function () {

            return {
                require: '?ngModel',
                link: function (scope, element, attrs, ngModelCtrl) {
                    if (!ngModelCtrl) {
                        return;
                    }

                    ngModelCtrl.$parsers.push(function (val) {
                        var regexp = /[^0-9]+/g;
                        if (attrs.decimal !== undefined) {
                            regexp = /[^0-9\.]+/g;
                        }
                        var clean = val.replace(regexp, '');
                        if (val !== clean) {
                            ngModelCtrl.$setViewValue(clean);
                            ngModelCtrl.$render();
                        }
                        return clean;
                    });

                    var keyPress = function (event) {
                        if (event.keyCode === 32) {
                            event.preventDefault();
                        }
                    };

                    element.bind('keypress', keyPress);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('keypress', keyPress);
                        listenDestroy();
                    });
                }
            };

        }]).directive('onlyLetters', [function () {

            return {
                require: '?ngModel',
                link: function (scope, element, attrs, ngModelCtrl) {
                    if (!ngModelCtrl) {
                        return;
                    }

                    ngModelCtrl.$parsers.push(function (text) {
                        var regexp = /[^a-zA-Z ]/g;

                        var clean = text.replace(regexp, '');
                        if (text !== clean) {
                            ngModelCtrl.$setViewValue(clean);
                            ngModelCtrl.$render();
                        }
                        return clean;
                    });

                    var keyPress = function (event) {
                        if (event.keyCode === 32) {
                            //   event.preventDefault();
                        }
                    };

                    element.bind('keypress', keyPress);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('keypress', keyPress);
                        listenDestroy();
                    });
                }
            };

        }]).directive('plate', [function () {

            return {
                compile: function (tElement, tAttrs) {
                    return function (scope, element, attrs) {
                        // I handle key events
                        element.bind("keypress", function (event) {
                            var keyCode = event.which || event.keyCode; // I safely get the keyCode pressed from the event.
                            var keyCodeChar = String.fromCharCode(keyCode); // I determine the char from the keyCode.

                            // If the keyCode char does not match the allowed Regex Pattern, then don't allow the input into the field.
                            if (!keyCodeChar.match(new RegExp('[A-Z]{3}', "i"))) {
                                event.preventDefault();
                                return false;
                            }

                        });
                    };
                }
            };

        }]).directive('pasport', [function () {

             return {
                require: '?ngModel',
                link: function (scope, element, attrs, ngModelCtrl) {
                    if (!ngModelCtrl) {
                        return;
                    }

                    ngModelCtrl.$parsers.push(function (text) {
                        var arrtxt = text.split("");
                        if(arrtxt.length <= 0){
                            return "";
                        }
                        if(!arrtxt[0].match(/[a-z]/i)){
                            ngModelCtrl.$setViewValue("");
                            ngModelCtrl.$render();
                        }
                        return text;
                    });

                    var keyPress = function (event) {
                        if (event.keyCode === 32) {
                            //   event.preventDefault();
                        }
                    };

                    element.bind('keypress', keyPress);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('keypress', keyPress);
                        listenDestroy();
                    });
                }
            };


        }]).directive('onlyCurrency', [function () {
            return {
                require: '?ngModel',
                link: function (scope, element, attrs, ngModelCtrl) {
                    if (!ngModelCtrl) {
                        return;
                    }

                    ngModelCtrl.$parsers.push(function (val) {
                        if (angular.isUndefined(val)) {
                            var val = '';
                        }

                        var clean = val.replace(/[^-0-9\.]/g, '');
                        var negativeCheck = clean.split('-');
                        var decimalCheck = clean.split('.');
                        if (!angular.isUndefined(negativeCheck[1])) {
                            negativeCheck[1] = negativeCheck[1].slice(0, negativeCheck[1].length);
                            clean = negativeCheck[0] + '-' + negativeCheck[1];
                            if (negativeCheck[0].length > 0) {
                                clean = negativeCheck[0];
                            }

                        }

                        if (!angular.isUndefined(decimalCheck[1])) {
                            decimalCheck[1] = decimalCheck[1].slice(0, 2);
                            clean = decimalCheck[0] + '.' + decimalCheck[1];
                        }

                        if (val !== clean) {
                            ngModelCtrl.$setViewValue(clean);
                            ngModelCtrl.$render();
                        }
                        return clean;
                    });

                    element.bind('keypress', function (event) {
                        if (event.keyCode === 32) {
                            event.preventDefault();
                        }
                    });
                }
            };
        }]);

});