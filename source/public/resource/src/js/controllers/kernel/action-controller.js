/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("action_controller", ['$rootScope', '$scope', function ($rootScope, $scope) {

            $scope.$$operations = {
                process: {},
                retrieveRootList: {},
                retrieveIconList: {}
            };

            $scope.$$elements = {
                rootIdentifier: {
                    title: 'Accion padre',
                    required: false
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si la accion esta activa o no'
                },
                icon: {
                    title: 'Icono',
                    required: true
                },
                iconColor: {
                    title: 'Color del ícono',
                    required: true
                },
                type: {
                    title: 'Tipo',
                    required: true,
                    options: {
                        0: 'Etiqueta',
                        1: 'Accion',
                        2: 'Dependencia'
                    }
                },
                name: {
                    title: 'Nombre',
                    required: true,
                    maxlength: 32
                },
                handler: {
                    title: 'Manejador',
                    required: true,
                    maxlength: 64
                },
                action: {
                    title: 'Acción',
                    required: true,
                    maxlength: 64
                },
                runMode: {
                    title: 'Modo de ejecución',
                    required: true,
                    options: {
                        0: 'Pestaña',
                        1: 'Dialogo',
                        2: 'Oculta'
                    }
                },
                access: {
                    title: 'Nivel de acceso',
                    required: true,
                    options: {
                        0: 'Privado',
                        1: 'Registrado',
                        2: 'Heredado',
                        3: 'Público'
                    }
                },
                title: {
                    title: 'Título',
                    required: true,
                    maxlength: 64
                },
                showInMenu: {
                    title: 'En menú',
                    tooltip: 'Se muestra la accion en el menú'
                },
                confirm: {
                    title: 'Confirmación',
                    tooltip: 'Requiere confirmación'

                },
                maximized: {
                    title: 'Iniciar max.',
                    tooltip: 'Iniciar con ventana maximizada'
                },
                controllerName: {
                    title: 'Nombre del controlador',
                    required: true,
                    maxlength: 64
                },
                template: {
                    title: 'URL de la plantilla',
                    required: true,
                    maxlength: 2048
                },
                contextStates: {
                    title: 'Estados válidos para menú contextual',
                    required: false,
                    maxlength: 64
                },
                description: {
                    title: 'Descripcion',
                    required: false,
                    maxlength: 2048
                }
            };

            $scope.$$layout = {
                rootList: {
                    data: null,
                    populate: function (data) {
                        this.data = data;
                        if (this.data === undefined || this.data === null) {
                            return;
                        }
                        if ($scope.$$entity.root_identifier === undefined) {
                            $scope.$$entity.root_identifier = null;
                        }
                        var selObj = null;
                        if ($scope.$$entity.root_identifier === null || (typeof $scope.$$entity.root_identifier) !== "object") {
                            selObj = this.data.filter(function (obj) {
                                return obj.identifier === $scope.$$entity.root_identifier;
                            });
                        } else {
                            selObj = this.data.filter(function (obj) {
                                return obj.identifier === $scope.$$entity.root_identifier.identifier;
                            });
                        }
                        $scope.$$entity.root_identifier = selObj[0];
                    }
                },
                iconList: {
                    data: null,
                    populate: function (data) {
                        this.data = JSON.parse(data);
                        if (this.data === undefined || this.data === null) {
                            return;
                        }
                        if ($scope.$$entity.icon === undefined || $scope.$$entity.icon === null) {
                            return;
                        }
                        if ((typeof $scope.$$entity.icon) === "object") {
                            var selObj = this.data.filter(function (obj) {
                                return obj.identifier === $scope.$$entity.icon.identifier;
                            });
                            $scope.$$entity.icon = (selObj[0] !== undefined) ? selObj[0] : null;
                            return;
                        }
                        var selObj = this.data.filter(function (obj) {
                            return obj.identifier === $scope.$$entity.icon;
                        });
                        $scope.$$entity.icon = selObj[0];
                    }
                },
                typeList: {
                    tag: null,
                    change: function () {
                        this.tag = (parseInt($scope.$$entity.type) === 0);
                        $scope.$$elements.rootIdentifier.required = (parseInt($scope.$$entity.type) === 2);
                        $scope.$$elements.handler.required = !this.tag;
                        $scope.$$elements.action.required = !this.tag;
                        $scope.$$elements.runMode.required = !this.tag;
                        $scope.$$elements.access.required = !this.tag;
                        //$scope.elements.title.required = !this.tag;
                        $scope.$$elements.controllerName.required = !this.tag;
                        $scope.$$elements.template.required = !this.tag;
                        //$scope.elements.contextStates.required = !this.tag;
                    }
                },
                runModeList: {
                    dialog: null,
                    hidden: null,
                    change: function () {
                        var runM = $scope.$$elements.runMode.required;
                        this.dialog = (parseInt($scope.$$entity.run_mode) === 1);
                        this.hidden = (parseInt($scope.$$entity.run_mode) === 2);
                        $scope.$$elements.controllerName.required = (!this.hidden && runM);
                        $scope.$$elements.template.required = (!this.hidden && runM);
                    }
                },
                accessList: {
                    tag: null,
                    change: function () {
                        this.tag = (parseInt($scope.$$entity.type) === 0);
                        $scope.$$elements.handler.required = !this.tag;
                        $scope.$$elements.action.required = !this.tag;
                        $scope.$$elements.runMode.required = !this.tag;
                        $scope.$$elements.access.required = !this.tag;
                        $scope.$$elements.title.required = !this.tag;
                        $scope.$$elements.controllerName.required = !this.tag;
                        $scope.$$elements.template.required = !this.tag;
                        $scope.$$elements.contextStates.required = !this.tag;
                    }
                },
                updateId: function () {
                    var selected = $scope.$$entity.root_identifier;
                    if (selected !== undefined && selected !== null) {
                        $scope.$$entity.handler = selected.handler;
                        $scope.$$entity.action = selected.action;
                    }
                }
            };

            $scope.$$entity = {
                identifier: null,
                root_identifier: null,
                active: null,
                icon: null,
                icon_color: null,
                type: null,
                name: null,
                handler: null,
                action: null,
                run_mode: null,
                access: null,
                title: null,
                show_in_menu: null,
                confirm: null,
                maximized: null,
                controller_name: null,
                template: null,
                context_states: null,
                description: null
            };

            $scope.$$tinyEntity = {
                data: {
                    action: null
                },
                populate: function () {
                    this.data.action = $ng.copy($scope.$$entity);
                    if ($scope.$$entity.root_identifier !== undefined && $scope.$$entity.root_identifier !== null) {
                        this.data.action.root_identifier = $scope.$$entity.root_identifier.identifier;
                    }
                    if ($scope.$$entity.icon !== undefined && $scope.$$entity.icon !== null) {
                        this.data.action.icon = $scope.$$entity.icon.identifier;
                    }
                    this.data.action.active = $scope.$$entity.active ? 1 : 0;
                    this.data.action.show_in_menu = $scope.$$entity.show_in_menu ? 1 : 0;
                    this.data.action.confirm = $scope.$$entity.confirm ? 1 : 0;
                    this.data.action.maximized = $scope.$$entity.maximized ? 1 : 0;
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function ($$data) {
                $scope.$$entity.identifier = $$data.entity.identifier;
                $scope.$$entity.root_identifier = $$data.entity.root_identifier;
                $scope.$$entity.active = $$data.entity.active;
                $scope.$$entity.icon = $$data.entity.icon;
                $scope.$$entity.icon_color = $$data.entity.icon_color;
                $scope.$$entity.type = $$data.entity.type;
                $scope.$$entity.name = $$data.entity.name;
                $scope.$$entity.handler = $$data.entity.handler;
                $scope.$$entity.action = $$data.entity.action;
                $scope.$$entity.run_mode = $$data.entity.run_mode;
                $scope.$$entity.access = $$data.entity.access;
                $scope.$$entity.title = $$data.entity.title;
                $scope.$$entity.show_in_menu = $$data.entity.show_in_menu;
                $scope.$$entity.confirm = $$data.entity.confirm;
                $scope.$$entity.controller_name = $$data.entity.controller_name;
                $scope.$$entity.template = $$data.entity.template;
                $scope.$$entity.context_states = $$data.entity.context_states;
                $scope.$$entity.description = $$data.entity.description;
                //data.entity.properties = data.entity.properties;
                $scope.$$entity.maximized = $$data.entity.properties.maximized;
                $scope.$$operations = $$data.operations;
                $scope.$$layout.typeList.change();
                $scope.$$layout.runModeList.change();
            };

        }]).controller('action_php_code_controller', ['$scope', function ($scope) {

            $scope.text = "";

            $scope.ace = {
                useWrapMode: true,
                showGutter: true,
                theme: 'eclipse',
                mode: 'php'
            };

            $scope.$$initController = function (data) {
                $scope.text = data;
            };

        }]);
});