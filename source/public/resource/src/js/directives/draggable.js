/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    return modules.$$directives.directive('draggable', ['$document', function ($document) {
            return {
                link: function (scope, element, attr) {
                    var startX = 0, startY = 0, x = 0, y = 0;

                    element.css({
                        position: 'relative'
                    });

                    element.on('mousedown', function (event) {
                        // Prevent default dragging of selected content
                        if(event.target.attributes['data-draggable-handler'] === undefined){
                            return;
                        }
                        event.preventDefault();
                        startX = event.pageX - x;
                        startY = event.pageY - y;
                        $document.on('mousemove', mousemove);
                        $document.on('mouseup', mouseup);
                    });

                    function mousemove(event) {
                        y = event.pageY - startY;
                        x = event.pageX - startX;
                        element.css({
                            top: y + 'px',
                            left: x + 'px'
                        });
                    }

                    function mouseup() {
                        $document.off('mousemove', mousemove);
                        $document.off('mouseup', mouseup);
                    }
                }
            };
        }]);
});