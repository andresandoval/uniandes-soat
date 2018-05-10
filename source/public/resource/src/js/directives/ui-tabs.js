/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules'], function (modules) {

    /*
     * {
     title: __title__,
     active: true,
     content: '<div class="spinner-page"><div class="spinner-container"><i class="fa fa-refresh fa-spin"></i></div></div>'
     }
     */

    return modules.$$directives.constant('$$uiTabsProvider', {
        data: {}, //id: {title, active, content}
        add: function (tab) {
            //tab: {identifier, title}
            var added = true;
            if (!(this.data !== undefined && this.data !== null && this.data.length > 0)) {
                this.data = [];
            }
            for (var i = 0; i < this.data.length; i++) {
                if (this.data[i].identifier === tab.identifier) {
                    this.data[i].active = true;
                    added = false;
                } else {
                    this.data[i].active = false;
                }
            }
            if (added) {
                tab['active'] = true;
                tab['content'] = '<div class="spinner-page"><div class="spinner-container"><i class="fa fa-refresh fa-spin"></i></div></div>';
                this.data.push(tab);
            }
            return added;
        }
    }).directive('uiTabs', ['$$uiTabsProvider', function ($$uiTabsProvider) {

            return {
                restrict: 'E',

                scope: {},

                template: '<div class="ui-tabs" data-ng-if="exists()">\
                              <ul>\
                                  <li data-ng-repeat="tab in tabs.data" draggable="true"><p data-active="{{tab.active}}" data-wheel-click="remove(tab)" data-ng-click="!tab.active && selectTab(tab)"><span data-compile-unsafe-html="tab.title"></span>  <i class="fa fa-times action" data-ng-style="{\'visibility\' : tab.active ? \'visible\' : \'hidden\'}" data-ng-click="remove(tab)"></i></p></li>\
                              </ul> \
                              <ui-tab-body data-ng-repeat="tab in tabs.data" data-t-tab="tab" data-active="{{tab.active}}"></ui-tab-body>\
                           </div><div class="ui-tabs-empty" data-ng-if="!exists()">',

                link: function (scope, element, attrs, ctrl) {

                    scope.tabs = $$uiTabsProvider;

                    //scope.tabs = $$uiTabsProvider.data;
                    scope.selectTab = function (tab) {
                        var index = this.tabs.data.indexOf(tab);
                        for (var i = 0; i < this.tabs.data.length; i++) {
                            this.tabs.data[i].active = (index === i);
                        }
                    };

                    scope.remove = function (tab) {
                        var index = this.tabs.data.indexOf(tab);
                        if (index > -1) {
                            this.tabs.data.splice(index, 1);
                        }
                        if (this.tabs.data.length > 0) {
                            if (this.tabs.data[index - 1] !== undefined) {
                                scope.selectTab(this.tabs.data[index - 1]);
                            } else if (this.tabs.data[index + 1] !== undefined) {
                                scope.selectTab(this.tabs.data[index + 1]);
                            } else {
                                scope.selectTab(this.tabs.data[0]);
                            }
                        }
                    };

                    scope.exists = function () {
                        return this.tabs.data !== null && this.tabs.data.length > 0;
                    };

                },
                controller: function($scope){
                    this.closeTab = function(tab){
                        $scope.remove(tab);
                    };
                }
            };
        }]).directive('uiTabBody',[ function(){
            return {
                restrict: 'E',
                template: '<div class="body-wrapper" data-compile-unsafe-html="tab.content"></div>',
                require: '^^uiTabs',
                scope: {
                    tab : '=tTab'
                },
                link: function(scope, element, attr, cont){
                    scope.close = function(){
                        cont.closeTab(scope.tab);
                    };
                },
                controller: function($scope){
                    this.close = function(){
                        $scope.close();
                    };
                }
            };
        }]);
});