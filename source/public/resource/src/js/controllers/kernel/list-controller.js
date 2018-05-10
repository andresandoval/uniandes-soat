/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['angular', 'app-modules', 'md5'], function ($ng, modules, md5) {

    return modules.$$kernel.controller('list_controller', ['$rootScope', '$scope', '$$http', function ($rootScope, $scope, $$http) {

            $scope.request = {
                retrieveList: null
            };

            $scope.tmpId = null;

            $scope.status = null;

            $scope.filter = {
                totalRowCount: 0,
                currentPage: 1,
                maxPages: 8,
                rowsPerPage: {
                    list: {
                        "0": "Todas",
                        "5": "5 Registros",
                        "10": "10 Registros",
                        "20": "20 Registros",
                        "30": "30 Registros",
                        "50": "50 Registros",
                        "100": "100 Registros",
                        "200": "200 Registros"
                    },
                    current: "10"
                },
                pattern: null,
                advanced: {
                    data: null,
                    tmpData: null,
                    visible: false,
                    get: function () {
                        var __filters = {};
                        $ng.forEach(this.data, function (filter, key) {
                            __filters[key] = filter.model;
                        });
                        return JSON.stringify(__filters);
                    },
                    exists: function () {
                        return this.data !== undefined && this.data !== null && Object.keys(this.data).length > 0;
                    },
                    show: function () {
                        this.visible = true;
                    },
                    hide: function () {
                        this.visible = false;
                    },
                    commit: function () {
                        this.hide();
                        if (!$ng.equals(this.data, this.tmpData)) {
                            this.data = $ng.copy(this.tmpData);
                            $scope.rows.populate();
                        }
                    },
                    rollback: function () {
                        this.hide();
                        this.tmpData = $ng.copy(this.data);
                    }
                },
                get: function () {
                    var _limit = parseInt($scope.filter.rowsPerPage.current);
                    var _offset = (this.currentPage - 1) * _limit;
                    return {
                        __limit__: _limit <= 0 ? 0 : _limit,
                        __offset__: _offset <= 0 ? 0 : _offset,
                        __pattern__: this.pattern,
                        __filters__: this.advanced.get()
                    };
                },
                sumary: {
                    data: "---",
                    set: function () {
                        var __from__ = (parseInt($scope.filter.rowsPerPage.current) * ($scope.filter.currentPage - 1)) + 1;
                        var __to__ = parseInt($scope.filter.rowsPerPage.current) <= 0 ? $scope.filter.totalRowCount : parseInt($scope.filter.rowsPerPage.current) * $scope.filter.currentPage;
                        if (__to__ > $scope.filter.totalRowCount) {
                            __to__ = $scope.filter.totalRowCount;
                        }
                        this.data = __from__ + "-" + __to__ + " de " + $scope.filter.totalRowCount;
                        //{{(filter.rowsPerPage * (filter.currentPage - 1)) + 1}}-{{filter.rowsPerPage * filter.currentPage}} de {{filter.totalRowCount}}
                    }
                }
            };

            $scope.batch = {
                data: [],
                exists: function () {
                    return this.data.length > 0;
                },
                show: function () {
                    if (!this.exists() || !$scope.rows.exists()) {
                        return false;
                    }
                    return $scope.selectedRows.data.$$rowIdentifier.length > 0;
                }
            };

            $scope.head = [];

            $scope.rows = {
                loading: false,
                data: [],
                exists: function () {
                    return (this.data.length > 0);
                },
                sorter: {
                    value: 0,
                    toogle: function () {
                        $scope.rows.toogleSelect(this.value === 0);
                    }
                },
                populate: function () {
                    var __data__ = {
                        $$request: $scope.request.retrieveList,
                        '$$filter': $scope.filter.get()
                    };
                    $$http.request({
                        data: __data__,
                        type: 'front',
                        overlay: false,
                        startCallback: function () {
                            $scope.status = "Recuperando lista...";
                            $scope.selectedRows.toogle(false);
                            $scope.rows.loading = true;
                            $scope.head = [];
                            $scope.rows.data = [];
                        },
                        successCallback: function (response) {
                            $scope.status = (response.content.status === undefined) ? 'Se recuperaron ' + response.content.count + ' filas' : response.content.status;
                            $scope.head = response.content.head;
                            $scope.rows.data = response.content.rows;
                            $scope.filter.totalRowCount = parseInt(response.content.count);
                        },
                        finalCallback: function () {
                            $scope.filter.sumary.set();
                            $scope.rows.loading = false;
                        }
                    });
                },
                reset: function () {
                    $scope.filter.pattern = null;
                    this.populate();
                },
                toogleSelect: function (newState) {
                    $scope.selectedRows.data.$$rowIdentifier = [];
                    var __data = $scope.selectedRows.data.$$rowIdentifier;
                    $ng.forEach($scope.layout.rows.data, function (row, key) {
                        row.checked = newState;
                        if (newState) {
                            __data.push(row.identifier);
                        }
                    });
                }
            };

            $scope.selectedRows = {
                data: {
                    $$rowIdentifier: []
                },
                populate: function () {
                    $scope.selectedRows.data.$$rowIdentifier = [];
                    var __data = $scope.selectedRows.data.$$rowIdentifier;

                    $ng.forEach($scope.rows.data, function (row, key) {
                        if (row.checked) {
                            __data.push(row.identifier);
                        }
                    });
                    if (__data.length <= 0) {
                        this.sumary.value = 0;
                    } else {
                        this.sumary.value = ($scope.rows.data.length === __data.length) ? 2 : 1;
                    }
                },
                select: function (row) {
                    row.checked = !row.checked;
                    this.populate();
                },
                sumary: {
                    value: 0, //0 = ninguna, 1 = algunas, 2 = todas
                    get: function () {
                        if (this.value === 0) {
                            return 'fa-square-o';
                        } else if (this.value === 1) {
                            return 'fa-minus-square-o';
                        }
                        return 'fa-check-square-o';
                    }},
                toogle: function (newState) {
                    if (newState === undefined) {
                        newState = (this.sumary.value === 0);
                    }
                    this.sumary.value = newState ? 2 : 0;
                    $scope.selectedRows.data.$$rowIdentifier = [];
                    var __data = $scope.selectedRows.data.$$rowIdentifier;
                    $ng.forEach($scope.rows.data, function (row, key) {
                        row.checked = newState;
                        if (newState) {
                            __data.push(row.identifier);
                        }
                    });
                    //this.sumary.value = newState ? 2 : 1;
                }
            };

            $scope.$watch(function () {
                return $scope.filter.currentPage + $scope.filter.rowsPerPage.current;
            }, function (newValue, oldValue) {
                if (newValue !== oldValue) {
                    $scope.rows.populate();
                }
            });

            $rootScope.$on('$$refresh_query_list_form', function (event, _listId) {
                if (_listId.toString().substring(0, 32) === $scope.request.retrieveList.toString().substring(0, 32)) {
                    $scope.rows.populate();
                }
            });

            $scope.closeContextMenu = function () {
                $rootScope.$emit('$$close-context-menu', null);
            };

            $scope.$$initController = function (data) {
                $scope.tmpId = '_' + md5('tmp-list-id-' + Date.now().toString());
                $scope.request = data.request;
                $scope.batch.data = data.batch;
                $scope.filter.advanced.data = data.filters;
                $scope.filter.advanced.tmpData = $ng.copy(data.filters);
                $scope.rows.populate();
            };

        }]);
});