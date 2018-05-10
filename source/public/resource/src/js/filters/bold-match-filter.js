/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {


    return modules.$$filters.filter("$$boldMatch", [function () {

            /**
             *
             * Añade la etiqueta <b> al texto que coincida con el patrón
             *
             * @param {string} text
             * @param {string} pattern
             * @returns {string}
             */
            return function (text, pattern) {
                if (pattern === undefined || pattern === null || pattern === '') {
                    return text;
                }
                if (text === undefined || text === null || text === '') {
                    return text;
                }
                pattern = pattern.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&');
                return text.replace(new RegExp("(" + pattern + ")(?![^<]*>|[^<>]*<\/)", 'gmi'), '<b>$&</b>');
            };

        }]);

});
