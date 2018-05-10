/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {



    return modules.$$directives.directive('removeDom',[function(){
            return{
                restrict: 'A',
                controller: function($scope, $element){
                    //alert('ui window cont');
                    this.remove = function(){
                        $element.remove();
                    };
                }
            };
        }]);
});