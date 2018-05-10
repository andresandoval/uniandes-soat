/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('fileModel', ['$$alert', function ($$alert) {
            return {
                restrict: 'A',
                scope: {
                    asmFileModel: '='
                },
                link: function (scope, element, attrs, ctrl) {
                    var fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.multiple = 'true';

                    fileInput.addEventListener("change", function () {
                        var duplicated = null;
                        scope.$apply(function () {
                            for (var i = 0, max = fileInput.files.length; i < max; i++) {
                                duplicated = scope.asmFileModel.filter(function (obj) {
                                    return obj.name === fileInput.files[i].name;
                                });
                                if (duplicated.length <= 0) {
                                    scope.asmFileModel.push(fileInput.files[i]);
                                } else {
                                    $$alert.notification.error('Archivo duplicado [' + fileInput.files[i].name + '], no incluido en la lista');
                                }
                            }
                            fileInput.files = [];
                        });
                    });
                    element.bind('click', fileInput.click);

                    var listenDestroy = scope.$on('$destroy', function () {
                        element.unbind('click', fileInput.click);
                        listenDestroy();
                    });

                }
            };
        }]);

});