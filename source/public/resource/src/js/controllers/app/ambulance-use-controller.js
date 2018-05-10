/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07-may-2016-11:21:05
 * Contact: andresandoval992@gmail.com
 *
 * ambulance-use-controller, part of soat
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("ambulance_use_controller", ["$scope", "$$performAction", "$rootScope", function ($scope, $$performAction, $rootScope) {

            $scope.$$operations = {
                process: {},
                retrieveAmbulanceUseTariffList: {}
            };

            $scope.$$elements = {
                autorization_number: {
                    title: 'Numero de autorización',
                    required: true,
                    maxlength: 64
                },
                city: {
                    title: 'Ciudad',
                    required: true,
                    maxlength: 64
                },
                km_out: {
                    title: 'Km salida',
                    required: true,
                    maxlength: 6,
                    minValue: 1
                },
                km_in: {
                    title: 'Km entrada',
                    required: true,
                    maxlength: 6,
                    minValue: 1
                },
                starting_point: {
                    title: 'Punto de arranque',
                    required: true
                },
                ambulance_km: {
                    title: 'Pago adicional por km.',
                    required: true
                },
                description: {
                    title: 'Descripcion',
                    required: true,
                    maxlength: 2048
                }
            };

            $scope.$$layout = {
                starting_point: null,
                ambulance_km: null,
                tariffList: {
                    data: null,
                    populate: function (data) {
                        this.data = data;
                    }
                },
                validateKm : function(){
					var __in = parseInt($scope.$$entity.km_in);
					var __out = parseInt($scope.$$entity.km_out);
					
                    if(__out > __in){
                        return "El kilometraje de entrada no puede ser menor que el de salida";
                    }
                    return true;
                }
            };

            $scope.$$entity = {
                identifier: null,
                form008_identifier: null,
                autorization_number: null,
                city: null,
                km_out: null,
                km_in: null,
                km_diff: null,
                starting_point_code: null,
                starting_point_description: null,
                starting_point_uvr: null,
                starting_point_fcm: null,
                starting_point_value: null,
                ambulance_km_code: null,
                ambulance_km_description: null,
                ambulance_km_uvr: null,
                ambulance_km_fcm: null,
                ambulance_km_value: null,
                ambulance_km_subtotal: null,
                total: null,
                description: null
            };

            $scope.$$tinyEntity = {
                data: {
                    'ambulance-use': {}
                },
                populate: function () {
					
					var __in = 0;
					var __out = 0;

					if(!isNaN($scope.$$entity.km_in)){
						__in = parseInt($scope.$$entity.km_in);
					}
					
					if(!isNaN($scope.$$entity.km_out)){
						__out = parseInt($scope.$$entity.km_out);
					}
					
                   /* if ($scope.$$entity.km_out === undefined && $scope.$$entity.km_out === null) {
                        $scope.$$entity.km_out = 0;
                    }
                    if ($scope.$$entity.km_in === undefined || $scope.$$entity.km_in === null) {
                        $scope.$$entity.km_in = 0;
                    }*/

                    $scope.$$entity.km_diff = __in - __out;

                    $scope.$$entity.km_diff = $scope.$$entity.km_diff <= 0 ? 0 : $scope.$$entity.km_diff;

                    if ($scope.$$layout.starting_point === undefined || $scope.$$layout.starting_point === null) {
                        $scope.$$entity.starting_point_code = null;
                        $scope.$$entity.starting_point_description = null;
                        $scope.$$entity.starting_point_uvr = 0;
                        $scope.$$entity.starting_point_fcm = 0;
                        $scope.$$entity.starting_point_value = 0;
                    } else {
                        $scope.$$entity.starting_point_code = $scope.$$layout.starting_point.code;
                        $scope.$$entity.starting_point_description = $scope.$$layout.starting_point.description;
                        $scope.$$entity.starting_point_uvr = $scope.$$layout.starting_point.uvr;
                        $scope.$$entity.starting_point_fcm = $scope.$$layout.starting_point.fcm;
                        $scope.$$entity.starting_point_value = $scope.$$layout.starting_point.value;
                    }

                    if ($scope.$$layout.ambulance_km === undefined || $scope.$$layout.ambulance_km === null) {
                        $scope.$$entity.ambulance_km_code = null;
                        $scope.$$entity.ambulance_km_description = null;
                        $scope.$$entity.ambulance_km_uvr = 0;
                        $scope.$$entity.ambulance_km_fcm = 0;
                        $scope.$$entity.ambulance_km_value = 0;
                    } else {
                        $scope.$$entity.ambulance_km_code = $scope.$$layout.ambulance_km.code;
                        $scope.$$entity.ambulance_km_description = $scope.$$layout.ambulance_km.description;
                        $scope.$$entity.ambulance_km_uvr = $scope.$$layout.ambulance_km.uvr;
                        $scope.$$entity.ambulance_km_fcm = $scope.$$layout.ambulance_km.fcm;
                        $scope.$$entity.ambulance_km_value = $scope.$$layout.ambulance_km.value;
                    }

                    $scope.$$entity.ambulance_km_subtotal = $scope.$$entity.ambulance_km_value * $scope.$$entity.km_diff;

                    $scope.$$entity.total = $scope.$$entity.ambulance_km_subtotal + $scope.$$entity.starting_point_value;

                    this.data['ambulance-use'] = $ng.copy($scope.$$entity);
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_form008_seguimiento_listas');
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.form008_identifier = $$data.entity.form008_identifier;
                $scope.$$entity.identifier = $$data.entity.identifier;
                $scope.$$entity.autorization_number = $$data.entity.autorization_number;
                $scope.$$entity.city = $$data.entity.city;
                $scope.$$entity.km_out = $$data.entity.km_out;
                $scope.$$entity.km_in = $$data.entity.km_in;
                $scope.$$entity.km_diff = $$data.entity.km_diff;
                $scope.$$entity.starting_point_code = $$data.entity.starting_point_code;
                $scope.$$entity.starting_point_description = $$data.entity.starting_point_description;
                $scope.$$entity.starting_point_uvr = $$data.entity.starting_point_uvr;
                $scope.$$entity.starting_point_fcm = $$data.entity.starting_point_fcm;
                $scope.$$entity.starting_point_value = $$data.entity.starting_point_value;
                $scope.$$entity.ambulance_km_code = $$data.entity.ambulance_km_code;
                $scope.$$entity.ambulance_km_description = $$data.entity.ambulance_km_description;
                $scope.$$entity.ambulance_km_uvr = $$data.entity.ambulance_km_uvr;
                $scope.$$entity.ambulance_km_fcm = $$data.entity.ambulance_km_fcm;
                $scope.$$entity.ambulance_km_value = $$data.entity.ambulance_km_value;
                $scope.$$entity.ambulance_km_subtotal = $$data.entity.ambulance_km_subtotal;
                $scope.$$entity.total = $$data.entity.total;
                $scope.$$entity.description = $$data.entity.description;
            };

            $scope.$watch('$$entity.city', function (n, o) {
                if (n !== o) {
                    if (n !== undefined && n !== null && n.length > 0) {
                        $scope.$$entity.description = 'RECORRIDO SANTO DOMINGO - ' + $scope.$$entity.city.toString().toUpperCase() + ' - SANTO DOMINGO ';
                    } else {
                        $scope.$$entity.description = null;
                    }
                }
            });

        }]);
});