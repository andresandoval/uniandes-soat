/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {


    return modules.$$filters.filter("$$fileIcon", [function () {

            return function (file) {
                if(file === undefined || file=== null || file === ''){
                    return 'fa-file-o';
                }

                var tmpRegexp = null;
                tmpRegexp = /(.*image\/.+)$/i;
                if (tmpRegexp.test(file)) {
                    return 'fa-file-image-o';
                }
                tmpRegexp = /(.*x-world\/x-3.*)$/i;
                if (tmpRegexp.test(file)) {
                    return 'fa-apple';
                }
                return 'fa-file-o';
            };

        }]);

});
