/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$filters.filter("$$sizeConvertion", [function () {

            /**
             *
             *Convierte una expresion en bytes a una expresion en n
             *
             * @param {int} bytes
             * @param {int} precision
             * @returns {String}
             */
            return function (bytes, precision) {
                if (isNaN(parseFloat(bytes)) || !isFinite(bytes)){
                    return '-';
                }
                if (typeof precision === 'undefined'){
                    precision = 1;
                }
                var units = ['bytes', 'kB', 'MB', 'GB', 'TB', 'PB'];
                var number = Math.floor(Math.log(bytes) / Math.log(1024));

                return (bytes / Math.pow(1024, Math.floor(number))).toFixed(precision) + ' ' + units[number];
            };

        }]);
});
