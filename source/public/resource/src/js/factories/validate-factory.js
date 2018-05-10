/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

/* global TypeError */

define(['app-modules'], function (modules) {

    return modules.$$factories.factory('$$validate', ['$controller', function ($controller) {

            var _text = function (value, mandatory, maxLength) {

                if (value === undefined || value === null || value.toString().length <= 0) {
                    return !mandatory;
                }
                value = value.toString();
                if (mandatory === true) {
                    if (value.trim().length <= 0){
                        return false;
                    }
                }
                return (value.trim().length <= maxLength);
            };
            var _option = function (value, required) {
                if (value === undefined || value === null) {
                    return !required;
                }
                return true;
            };
            var _ci = function (value, mandatory) {
                if (value === undefined) {
                    return false;
                }
                if (value === null) {
                    return !mandatory;
                }
                value = value.toString();
                if (isNaN(value) || value.length !== 10) {
                    return false;
                }
                var ced = value.split("");
                var sum = 0;
                var prov = parseInt(ced[0] + ced[1]);
                var dig = parseInt(ced[2]);
                if (prov <= 0 || prov > 24) {
                    return false;
                }
                if (dig < 0 || dig > 5) {
                    return false;
                }
                var tmpProd = 0;
                for (i = 0; i < 9; i++) {
                    tmpProd = parseInt(ced[i]) * (2 - (parseInt(i) % 2));
                    sum += ((tmpProd >= 10) ? (tmpProd - 9) : tmpProd);
                }
                var sigDec = (Math.ceil(sum / 10)) * 10;
                var digVer = (parseInt(sigDec - sum) === 10) ? 0 : parseInt(sigDec - sum);
                return (digVer === parseInt(ced[9]));
            };
            var _ruc = function (value, mandatory) {
                if (value === undefined) {
                    return false;
                }
                if (value === null) {
                    return !mandatory;
                }
                value = value.toString();
                if (isNaN(value) || value.length !== 13) {
                    return false;
                }
                var ruc = value.split("");
                var prov = parseInt(ruc[0] + ruc[1]);
                if (prov <= 0 || prov > 24) {
                    return false;
                }
                var dig = parseInt(ruc[2]);
                var rucNatural = function (ruc) {
                    if (ruc[10] !== '0' || ruc[11] !== '0' || ruc[12] === '0') {
                        return false;
                    }
                    var sum = 0;
                    var tmpProd = 0;
                    for (i = 0; i < 9; i++) {
                        tmpProd = parseInt(ruc[i]) * (2 - (parseInt(i) % 2));
                        sum += ((tmpProd >= 10) ? (tmpProd - 9) : tmpProd);
                    }
                    var sigDec = (Math.ceil(sum / 10)) * 10;
                    var digVer = (parseInt(sigDec - sum) === 10) ? 0 : parseInt(sigDec - sum);
                    return (digVer === parseInt(ruc[9]));
                };
                var rucJuridExtranjero = function (ruc) {
                    if (ruc[10] !== '0' || ruc[11] !== '0' || ruc[12] === '0') {
                        return false;
                    }
                    var coef = [4, 3, 2, 7, 6, 5, 4, 3, 2];
                    var sum = 0;
                    for (i = 0; i < 9; i++) {
                        sum += (parseInt(ruc[i]) * coef[i]);
                    }
                    var mod = sum % 11;
                    var digVer = 11 - mod;
                    return (digVer === parseInt(ruc[9]));
                };
                var rucPublicos = function (ruc) {
                    if (ruc[9] !== '0' || ruc[10] !== '0' || ruc[11] !== '0' || ruc[12] === '0') {
                        return false;
                    }
                    var coef = [3, 2, 7, 6, 5, 4, 3, 2];
                    var sum = 0;
                    for (i = 0; i < 8; i++) {
                        sum += (parseInt(ruc[i]) * coef[i]);
                    }
                    var mod = sum % 11;
                    var digVer = 11 - mod;
                    return (digVer === parseInt(ruc[8]));
                };
                if (dig >= 0 && dig <= 5) {
                    return rucNatural(ruc);
                } else if (dig === 6) {
                    return rucPublicos(ruc);
                } else if (dig === 9) {
                    return rucJuridExtranjero(ruc);
                }
                return false;
            };
            var _email = function (value, mandatory, maxLength) {
                if (value === undefined) {
                    return false;
                }
                if (value === null) {
                    return !mandatory;
                }
                value = value.toString();
                if (value.trim().length <= 0) {
                    return !mandatory;
                }
                if (value.trim().length > maxLength) {
                    return false;
                }
                var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                return re.test(value);
            };
            var _phone = function (value, mandatory, maxLength) {
                if (value === undefined) {
                    return false;
                }
                if (value === null) {
                    return !mandatory;
                }
                value = value.toString();
                if (value.trim().length <= 0) {
                    return !mandatory;
                }
                if (value.trim().length > maxLength) {
                    return false;
                }

                var re = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/i;
                return re.test(value);
            };
            var _date = function (value, mandatory) {
                if (value === undefined || value === null || value.toString().trim().length <= 0) {
                    return !mandatory;
                }
                return true;
                value = value.toString();
                var re = null;
                re = /^[0-3]?\d\/[0-2]?\d\/[12]\d{3}/gmi; //dd/mm/yyyy
                if (re.test(value)) {
                    return true;
                }
                re = /^[12]\d{3}-[0-3]?\d-[0-1]?\d$/gmi; //yyyy-mm-dd
                return re.test(value);
            };
            var _number = function (value, mandatory) {
                if (value === undefined || value === null) {
                    return !mandatory;
                }
                value = value.toString();
                if (value.trim().length <= 0) {
                    return !mandatory;
                }
                return !isNaN(value);
            };
            var _object = function (obj, mandatory) {
                if (obj === undefined || obj === null || obj.identifier === null) {
                    return !mandatory;
                }
                return true;
            };
            var _controller = function (controllerName) {
                if ((typeof controllerName) !== 'string' || controllerName.toString().trim().length <= 0) {
                    return false;
                }
                if (typeof window[controllerName] === 'function') {
                    return true;
                }
                try {
                    $controller(controllerName);
                    return true;
                }
                catch (error) {
                    return !(error instanceof TypeError);
                }
            };

            return {
                text: _text,
                option: _option,
                ci: _ci,
                ruc: _ruc,
                email: _email,
                phone: _phone,
                date: _date,
                number: _number,
                object: _object,
                controller: _controller
            };
        }]);
});