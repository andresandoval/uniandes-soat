/*
 *    Developed by: Andres Sandoval Montoya
 *    Contact: andresandoval992@gmail.com
 */

define(['app-modules', 'angular'], function (modules, $ng) {

    return modules.$$kernel.controller("patient_controller", ['$rootScope', '$scope', function ($rootScope, $scope) {

            var millisecondsToStr = function (milliseconds) {
                // TIP: to find current time in milliseconds, use:
                // var  current_time_milliseconds = new Date().getTime();

                function numberEnding(number) {
                    return (number > 1) ? 's' : '';
                }

                var temp = Math.floor(milliseconds / 1000);
                var years = Math.floor(temp / 31536000);
                if (years) {
                    return years + ' año' + numberEnding(years);
                }
                //TODO: Months! Maybe weeks?
                var days = Math.floor((temp %= 31536000) / 86400);
                if (days) {
                    return days + ' dia' + numberEnding(days);
                }
                var hours = Math.floor((temp %= 86400) / 3600);
                if (hours) {
                    return hours + ' hora' + numberEnding(hours);
                }
                var minutes = Math.floor((temp %= 3600) / 60);
                if (minutes) {
                    return minutes + ' minuto' + numberEnding(minutes);
                }
                var seconds = temp % 60;
                if (seconds) {
                    return seconds + ' segundo' + numberEnding(seconds);
                }
                return 'menos de un segundo'; //'just now' //or other string you like;
            };

            $scope.$$operations = {
                process: {}
            };

            $scope.$watch(function(){return $scope.$$elements.is_passport;}, function (n, o) {
                if (n !== o) {
                        $scope.$$entity.identificacion = null;
                        $scope.$$entity.pasaporte = null;
                    if ($scope.$$elements.is_passport) {
                        $scope.$$elements.passport.required = true;
                        $scope.$$elements.identificacion.required = false;
                    } else {
                        $scope.$$elements.passport.required = false;
                        $scope.$$elements.identificacion.required = true;
                    }
                }
            });

            $scope.$$elements = {
                is_passport: false,
                nuevo: false,
                idType: {
                    title: 'Pasaporte',
                    tooltip: 'Indica si la identificacion es CI o Pasaporte'
                },
                identificacion: {
                    title: 'Identificación',
                    required: true,
                    maxlength: 10
                },
                passport: {
                    title: 'Pasaporte',
                    required: false,
                    maxlength: 100
                },
                primer_nombre: {
                    title: 'Primer nombre',
                    required: true,
                    maxlength: 64
                },
                segundo_nombre: {
                    title: 'Segundo nombre',
                    required: false,
                    maxlength: 64
                },
                apellido_paterno: {
                    title: 'Apellido paterno',
                    required: true,
                    maxlength: 64
                },
                apellido_materno: {
                    title: 'Apellido materno',
                    required: false,
                    maxlength: 64
                },
                direccion: {
                    title: 'Direccion',
                    required: false,
                    maxlength: 128
                },
                barrio: {
                    title: 'Barrio',
                    required: false,
                    maxlength: 64
                },
                parroquia: {
                    title: 'Parroquia',
                    required: false,
                    options: {}
                },
                canton: {
                    title: 'Cantón',
                    required: false,
                    options: {}
                },
                provincia: {
                    title: 'Provincia',
                    required: false,
                    options: {
                        1: "AZUAY",
                        2: "BOLIVAR",
                        3: "CAÑAR",
                        4: "CARCHI",
                        5: "COTOPAXI",
                        6: "CHIMBORAZO",
                        7: "EL ORO",
                        8: "ESMERALDAS",
                        9: "GUAYAS",
                        10: "IMBABURA",
                        11: "LOJA",
                        12: "LOS RIOS",
                        13: "MANABI",
                        14: "MORONA SANTIAGO",
                        15: "NAPO",
                        16: "PASTAZA",
                        17: "PICHINCHA",
                        18: "TUNGURAHUA",
                        19: "ZAMORA CHINCHIPE",
                        20: "GALAPAGOS",
                        21: "SUCUMBIOS",
                        22: "ORELLANA",
                        23: "SANTO DOMINGO DE LOS TSACHILAS",
                        24: "SANTA ELENA",
                        90: "ZONAS NO DELIMITADAS"
                    }
                },
                zona: {
                    title: 'Zona',
                    required: false,
                    maxlength: 64
                },
                telefono: {
                    title: 'Nro. teléfono',
                    required: false,
                    maxlength: 10
                },
                fecha_nacimiento: {
                    title: 'Fecha de nacimiento',
                    required: true,
                    maxlength: 64
                },
                lugar_nacimiento: {
                    title: 'Lugar de nacimiento',
                    required: true,
                    maxlength: 64
                },
                nacionalidad: {
                    title: 'Nacionalidad',
                    required: true,
                    options: {}
                },
                grupo_cultural: {
                    title: 'Grupo cultural',
                    required: true,
                    options: {}
                },
                edad: {
                    title: 'Edad',
                    required: true,
                    maxlength: 64
                },
                genero: {
                    title: 'Sexo',
                    required: true,
                    options: {}
                },
                estado_civil: {
                    title: 'Estado civil',
                    required: true,
                    options: {}
                },
                instruccion: {
                    title: 'Instrucción',
                    required: false,
                    options: {}
                },
                fecha_admision: {
                    title: 'Fecha de admisión',
                    required: true,
                    maxlength: 64
                },
                ocupacion: {
                    title: 'Ocupación',
                    required: false,
                    options: {}
                },
                empresa_trabajo: {
                    title: 'Empresa donde labora',
                    required: false,
                    maxlength: 64
                },
                tipo_seguro_salud: {
                    title: 'Tipo de seguro de salud',
                    required: false,
                    options: {}
                },
                referido_de: {
                    title: 'Referido de',
                    required: false,
                    maxlength: 64
                },
                contacto_emergencia: {
                    title: 'En caso de emergencia avisar a',
                    required: false,
                    maxlength: 64
                },
                parentezco_contacto_emergencia: {
                    title: 'Parentezco',
                    required: false,
                    options: {
                        "CUÑADO(A)": "CUÑADO(A)",
                        "DESCONOCIDO/SIN ESPECIFICAR": "DESCONOCIDO/SIN ESPECIFICAR",
                        "ESPOSO(A)": "ESPOSO(A)",
                        "FAMILIAR LEJANO (3er. GRADO)": "FAMILIAR LEJANO (3er. GRADO)",
                        "HERMANO(A)": "HERMANO(A)",
                        "HIJO(A)": "HIJO(A)",
                        "NIETO(A)": "NIETO(A)",
                        "NINGUNO": "NINGUNO",
                        "NUERA/YERNO": "NUERA/YERNO",
                        "PAPA/MAMA": "PAPA/MAMA",
                        "PRIMO(A)": "PRIMO(A)",
                        "SOBRINO(A)": "SOBRINO(A)",
                        "SUEGRO(A)": "SUEGRO(A)",
                        "TIO(A)": "TIO(A)",
                        "VECINO(A)/CONOCIDO(A)/AMIGO(A)": "VECINO(A)/CONOCIDO(A)/AMIGO(A)"
                    }
                },
                direccion_contacto_emergencia: {
                    title: 'Dirección',
                    required: false,
                    maxlength: 64
                },
                telefono_contacto_emergencia: {
                    title: 'Teléfono',
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
                setAge: function () {
                    if ($scope.$$entity.fecha_nacimiento == null) {
                        $scope.$$entity.edad = null;
                        return;
                    }
                    var ageDifMs = Date.now() - $scope.$$entity.fecha_nacimiento;
                    $scope.$$entity.edad = millisecondsToStr(ageDifMs);

                    // $scope.$$entity.edad = Math.abs(ageDate.getUTCFullYear() - 1970);

                },
                canton: {
                    1: {101: "CUENCA", 102: "GIRÓN", 103: "GUALACEO", 104: "NABÓN", 105: "PAUTE", 106: "PUCARA", 107: "SAN FERNANDO", 108: "SANTA ISABEL", 109: "SIGSIG", 110: "OÑA", 111: "CHORDELEG", 112: "EL PAN", 113: "SEVILLA DE ORO", 114: "GUACHAPALA", 115: "CAMILO PONCE ENRÍQUEZ"},
                    2: {201: "GUARANDA", 202: "CHILLANES", 203: "CHIMBO", 204: "ECHEANDÍA", 205: "SAN MIGUEL", 206: "CALUMA", 207: "LAS NAVES"},
                    3: {301: "AZOGUES", 302: "BIBLIÁN", 303: "CAÑAR", 304: "LA TRONCAL", 305: "EL TAMBO", 306: "DÉLEG", 307: "SUSCAL"},
                    4: {401: "TULCÁN", 402: "BOLÍVAR", 403: "ESPEJO", 404: "MIRA", 405: "MONTÚFAR", 406: "SAN PEDRO DE HUACA"},
                    5: {501: "LATACUNGA", 502: "LA MANÁ", 503: "PANGUA", 504: "PUJILI", 505: "SALCEDO", 506: "SAQUISILÍ", 507: "SIGCHOS"},
                    6: {601: "RIOBAMBA", 602: "ALAUSI", 603: "COLTA", 604: "CHAMBO", 605: "CHUNCHI", 606: "GUAMOTE", 607: "GUANO", 608: "PALLATANGA", 609: "PENIPE", 610: "CUMANDÁ"},
                    7: {701: "MACHALA", 702: "ARENILLAS", 703: "ATAHUALPA", 704: "BALSAS", 705: "CHILLA", 706: "EL GUABO", 707: "HUAQUILLAS", 708: "MARCABELÍ", 709: "PASAJE", 710: "PIÑAS", 711: "PORTOVELO", 712: "SANTA ROSA", 713: "ZARUMA", 714: "LAS LAJAS"},
                    8: {801: "ESMERALDAS", 802: "ELOY ALFARO", 803: "MUISNE", 804: "QUININDÉ", 805: "SAN LORENZO", 806: "ATACAMES", 807: "RIOVERDE"},
                    9: {901: "GUAYAQUIL", 902: "ALFREDO BAQUERIZO MORENO (JUJÁN)", 903: "BALAO", 904: "BALZAR", 905: "COLIMES", 906: "DAULE", 907: "DURÁN", 908: "EL EMPALME", 909: "EL TRIUNFO", 910: "MILAGRO", 911: "NARANJAL", 912: "NARANJITO", 913: "PALESTINA", 914: "PEDRO CARBO", 916: "SAMBORONDÓN", 918: "SANTA LUCÍA", 919: "SALITRE (URBINA JADO)", 920: "SAN JACINTO DE YAGUACHI", 921: "PLAYAS", 922: "SIMÓN BOLÍVAR", 923: "CORONEL MARCELINO MARIDUEÑA", 924: "LOMAS DE SARGENTILLO", 925: "NOBOL", 927: "GENERAL ANTONIO ELIZALDE", 928: "ISIDRO AYORA"},
                    10: {1001: "IBARRA", 1002: "ANTONIO ANTE", 1003: "COTACACHI", 1004: "OTAVALO", 1005: "PIMAMPIRO", 1006: "SAN MIGUEL DE URCUQUÍ"},
                    11: {1101: "LOJA", 1102: "CALVAS", 1103: "CATAMAYO", 1104: "CELICA", 1105: "CHAGUARPAMBA", 1106: "ESPÍNDOLA", 1107: "GONZANAMÁ", 1108: "MACARÁ", 1109: "PALTAS", 1110: "PUYANGO", 1111: "SARAGURO", 1112: "SOZORANGA", 1113: "ZAPOTILLO", 1114: "PINDAL", 1115: "QUILANGA", 1116: "OLMEDO"},
                    12: {1201: "BABAHOYO", 1202: "BABA", 1203: "MONTALVO", 1204: "PUEBLOVIEJO", 1205: "QUEVEDO", 1206: "URDANETA", 1207: "VENTANAS", 1208: "VÍNCES", 1209: "PALENQUE", 1210: "BUENA FÉ", 1211: "VALENCIA", 1212: "MOCACHE", 1213: "QUINSALOMA"},
                    13: {1301: "PORTOVIEJO", 1302: "BOLÍVAR", 1303: "CHONE", 1304: "EL CARMEN", 1305: "FLAVIO ALFARO", 1306: "JIPIJAPA", 1307: "JUNÍN", 1308: "MANTA", 1309: "MONTECRISTI", 1310: "PAJÁN", 1311: "PICHINCHA", 1312: "ROCAFUERTE", 1313: "SANTA ANA", 1314: "SUCRE", 1315: "TOSAGUA", 1316: "24 DE MAYO", 1317: "PEDERNALES", 1318: "OLMEDO", 1319: "PUERTO LÓPEZ", 1320: "JAMA", 1321: "JARAMIJÓ", 1322: "SAN VICENTE"},
                    14: {1401: "MORONA", 1402: "GUALAQUIZA", 1403: "LIMÓN INDANZA", 1404: "PALORA", 1405: "SANTIAGO", 1406: "SUCÚA", 1407: "HUAMBOYA", 1408: "SAN JUAN BOSCO", 1409: "TAISHA", 1410: "LOGROÑO", 1411: "PABLO SEXTO", 1412: "TIWINTZA"},
                    15: {1501: "TENA", 1503: "ARCHIDONA", 1504: "EL CHACO", 1507: "QUIJOS", 1509: "CARLOS JULIO AROSEMENA TOLA"},
                    16: {1601: "PASTAZA", 1602: "MERA", 1603: "SANTA CLARA", 1604: "ARAJUNO"},
                    17: {1701: "QUITO", 1702: "CAYAMBE", 1703: "MEJIA", 1704: "PEDRO MONCAYO", 1705: "RUMIÑAHUI", 1707: "SAN MIGUEL DE LOS BANCOS", 1708: "PEDRO VICENTE MALDONADO", 1709: "PUERTO QUITO"},
                    18: {1801: "AMBATO", 1802: "BAÑOS DE AGUA SANTA", 1803: "CEVALLOS", 1804: "MOCHA", 1805: "PATATE", 1806: "QUERO", 1807: "SAN PEDRO DE PELILEO", 1808: "SANTIAGO DE PÍLLARO", 1809: "TISALEO"},
                    19: {1901: "ZAMORA", 1902: "CHINCHIPE", 1903: "NANGARITZA", 1904: "YACUAMBI", 1905: "YANTZAZA (YANZATZA)", 1906: "EL PANGUI", 1907: "CENTINELA DEL CÓNDOR", 1908: "PALANDA", 1909: "PAQUISHA"},
                    20: {2001: "SAN CRISTÓBAL", 2002: "ISABELA", 2003: "SANTA CRUZ"},
                    21: {2101: "LAGO AGRIO", 2102: "GONZALO PIZARRO", 2103: "PUTUMAYO", 2104: "SHUSHUFINDI", 2105: "SUCUMBÍOS", 2106: "CASCALES", 2107: "CUYABENO"},
                    22: {2201: "ORELLANA", 2202: "AGUARICO", 2203: "LA JOYA DE LOS SACHAS", 2204: "LORETO"},
                    23: {2301: "SANTO DOMINGO", 808: "LA CONCORDIA"},
                    24: {2401: "SANTA ELENA", 2402: "LA LIBERTAD", 2403: "SALINAS"},
                    90: {9001: "LAS GOLONDRINAS", 9003: "MANGA DEL CURA", 9004: "EL PIEDRERO"}
                },
                parish: {
                    101: {10101: "BELLAVISTA", 10102: "CAÑARIBAMBA", 10103: "EL BATÁN", 10104: "EL SAGRARIO", 10105: "EL VECINO", 10106: "GIL RAMÍREZ DÁVALOS", 10107: "HUAYNACÁPAC", 10108: "MACHÁNGARA", 10109: "MONAY", 10110: "SAN BLAS", 10111: "SAN SEBASTIÁN", 10112: "SUCRE", 10113: "TOTORACOCHA", 10114: "YANUNCAY", 10115: "HERMANO MIGUEL", 10150: "CUENCA", 10151: "BAÑOS", 10152: "CUMBE", 10153: "CHAUCHA", 10154: "CHECA (JIDCAY)", 10155: "CHIQUINTAD", 10156: "LLACAO", 10157: "MOLLETURO", 10158: "NULTI", 10159: "OCTAVIO CORDERO PALACIOS (SANTA ROSA)", 10160: "PACCHA", 10161: "QUINGEO", 10162: "RICAURTE", 10163: "SAN JOAQUÍN", 10164: "SANTA ANA", 10165: "SAYAUSÍ", 10166: "SIDCAY", 10167: "SININCAY", 10168: "TARQUI", 10169: "TURI", 10170: "VALLE", 10171: "VICTORIA DEL PORTETE (IRQUIS)"},
                    102: {10250: "GIRÓN", 10251: "ASUNCIÓN", 10252: "SAN GERARDO"},
                    103: {10350: "GUALACEO", 10351: "CHORDELEG", 10352: "DANIEL CÓRDOVA TORAL (EL ORIENTE)", 10353: "JADÁN", 10354: "MARIANO MORENO", 10355: "PRINCIPAL", 10356: "REMIGIO CRESPO TORAL (GÚLAG)", 10357: "SAN JUAN", 10358: "ZHIDMAD", 10359: "LUIS CORDERO VEGA", 10360: "SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)"},
                    104: {10450: "NABÓN", 10451: "COCHAPATA", 10452: "EL PROGRESO (CAB.EN ZHOTA)", 10453: "LAS NIEVES (CHAYA)", 10454: "OÑA"},
                    105: {10550: "PAUTE", 10551: "AMALUZA", 10552: "BULÁN (JOSÉ VÍCTOR IZQUIERDO)", 10553: "CHICÁN (GUILLERMO ORTEGA)", 10554: "EL CABO", 10555: "GUACHAPALA", 10556: "GUARAINAG", 10557: "PALMAS", 10558: "PAN", 10559: "SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)", 10560: "SEVILLA DE ORO", 10561: "TOMEBAMBA", 10562: "DUG DUG"},
                    106: {10650: "PUCARÁ", 10651: "CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO)", 10652: "SAN RAFAEL DE SHARUG"},
                    107: {10750: "SAN FERNANDO", 10751: "CHUMBLÍN"},
                    108: {10850: "SANTA ISABEL (CHAGUARURCO)", 10851: "ABDÓN CALDERÓN (LA UNIÓN)", 10852: "EL CARMEN DE PIJILÍ", 10853: "ZHAGLLI (SHAGLLI)", 10854: "SAN SALVADOR DE CAÑARIBAMBA"},
                    109: {10950: "SIGSIG", 10951: "CUCHIL (CUTCHIL)", 10952: "GIMA", 10953: "GUEL", 10954: "LUDO", 10955: "SAN BARTOLOMÉ", 10956: "SAN JOSÉ DE RARANGA"},
                    110: {11050: "SAN FELIPE DE OÑA CABECERA CANTONAL", 11051: "SUSUDEL"},
                    111: {11150: "CHORDELEG", 11151: "PRINCIPAL", 11152: "LA UNIÓN", 11153: "LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)", 11154: "SAN MARTÍN DE PUZHIO"},
                    112: {11250: "EL PAN", 11251: "AMALUZA", 11252: "PALMAS", 11253: "SAN VICENTE"},
                    113: {11350: "SEVILLA DE ORO", 11351: "AMALUZA", 11352: "PALMAS"},
                    114: {11450: "GUACHAPALA"},
                    115: {11550: "CAMILO PONCE ENRÍQUEZ", 11551: "EL CARMEN DE PIJILÍ"},
                    201: {20101: "ÁNGEL POLIBIO CHÁVES", 20102: "GABRIEL IGNACIO VEINTIMILLA", 20103: "GUANUJO", 20150: "GUARANDA", 20151: "FACUNDO VELA", 20152: "GUANUJO", 20153: "JULIO E. MORENO (CATANAHUÁN GRANDE)", 20154: "LAS NAVES", 20155: "SALINAS", 20156: "SAN LORENZO", 20157: "SAN SIMÓN (YACOTO)", 20158: "SANTA FÉ (SANTA FÉ)", 20159: "SIMIÁTUG", 20160: "SAN LUIS DE PAMBIL"},
                    202: {20250: "CHILLANES", 20251: "SAN JOSÉ DEL TAMBO (TAMBOPAMBA)"},
                    203: {20350: "SAN JOSÉ DE CHIMBO", 20351: "ASUNCIÓN (ASANCOTO)", 20352: "CALUMA", 20353: "MAGDALENA (CHAPACOTO)", 20354: "SAN SEBASTIÁN", 20355: "TELIMBELA"},
                    204: {20450: "ECHEANDÍA"},
                    205: {20550: "SAN MIGUEL", 20551: "BALSAPAMBA", 20552: "BILOVÁN", 20553: "RÉGULO DE MORA", 20554: "SAN PABLO (SAN PABLO DE ATENAS)", 20555: "SANTIAGO", 20556: "SAN VICENTE"},
                    206: {20650: "CALUMA"},
                    207: {20701: "LAS MERCEDES", 20702: "LAS NAVES", 20750: "LAS NAVES"},
                    301: {30101: "AURELIO BAYAS MARTÍNEZ", 30102: "AZOGUES", 30103: "BORRERO", 30104: "SAN FRANCISCO", 30150: "AZOGUES", 30151: "COJITAMBO", 30152: "DÉLEG", 30153: "GUAPÁN", 30154: "JAVIER LOYOLA (CHUQUIPATA)", 30155: "LUIS CORDERO", 30156: "PINDILIG", 30157: "RIVERA", 30158: "SAN MIGUEL", 30159: "SOLANO", 30160: "TADAY"},
                    302: {30250: "BIBLIÁN", 30251: "NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)", 30252: "SAN FRANCISCO DE SAGEO", 30253: "TURUPAMBA", 30254: "JERUSALÉN"},
                    303: {30350: "CAÑAR", 30351: "CHONTAMARCA", 30352: "CHOROCOPTE", 30353: "GENERAL MORALES (SOCARTE)", 30354: "GUALLETURO", 30355: "HONORATO VÁSQUEZ (TAMBO VIEJO)", 30356: "INGAPIRCA", 30357: "JUNCAL", 30358: "SAN ANTONIO", 30359: "SUSCAL", 30360: "TAMBO", 30361: "ZHUD", 30362: "VENTURA", 30363: "DUCUR"},
                    304: {30450: "LA TRONCAL", 30451: "MANUEL J. CALLE", 30452: "PANCHO NEGRO"},
                    305: {30550: "EL TAMBO"},
                    306: {30650: "DÉLEG", 30651: "SOLANO"},
                    307: {30750: "SUSCAL"},
                    401: {40101: "GONZÁLEZ SUÁREZ", 40102: "TULCÁN", 40150: "TULCÁN", 40151: "EL CARMELO (EL PUN)", 40152: "HUACA", 40153: "JULIO ANDRADE (OREJUELA)", 40154: "MALDONADO", 40155: "PIOTER", 40156: "TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)", 40157: "TUFIÑO", 40158: "URBINA (TAYA)", 40159: "EL CHICAL", 40160: "MARISCAL SUCRE", 40161: "SANTA MARTHA DE CUBA"},
                    402: {40250: "BOLÍVAR", 40251: "GARCÍA MORENO", 40252: "LOS ANDES", 40253: "MONTE OLIVO", 40254: "SAN VICENTE DE PUSIR", 40255: "SAN RAFAEL"},
                    403: {40301: "EL ÁNGEL", 40302: "27 DE SEPTIEMBRE", 40350: "EL ANGEL", 40351: "EL GOALTAL", 40352: "LA LIBERTAD (ALIZO)", 40353: "SAN ISIDRO"},
                    404: {40450: "MIRA (CHONTAHUASI)", 40451: "CONCEPCIÓN", 40452: "JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)", 40453: "JUAN MONTALVO (SAN IGNACIO DE QUIL)"},
                    405: {40501: "GONZÁLEZ SUÁREZ", 40502: "SAN JOSÉ", 40550: "SAN GABRIEL", 40551: "CRISTÓBAL COLÓN", 40552: "CHITÁN DE NAVARRETE", 40553: "FERNÁNDEZ SALVADOR", 40554: "LA PAZ", 40555: "PIARTAL"},
                    406: {40650: "HUACA", 40651: "MARISCAL SUCRE"},
                    501: {50101: "ELOY ALFARO (SAN FELIPE)", 50102: "IGNACIO FLORES (PARQUE FLORES)", 50103: "JUAN MONTALVO (SAN SEBASTIÁN)", 50104: "LA MATRIZ", 50105: "SAN BUENAVENTURA", 50150: "LATACUNGA", 50151: "ALAQUES (ALÁQUEZ)", 50152: "BELISARIO QUEVEDO (GUANAILÍN)", 50153: "GUAITACAMA (GUAYTACAMA)", 50154: "JOSEGUANGO BAJO", 50155: "LAS PAMPAS", 50156: "MULALÓ", 50157: "11 DE NOVIEMBRE (ILINCHISI)", 50158: "POALÓ", 50159: "SAN JUAN DE PASTOCALLE", 50160: "SIGCHOS", 50161: "TANICUCHÍ", 50162: "TOACASO", 50163: "PALO QUEMADO"},
                    502: {50201: "EL CARMEN", 50202: "LA MANÁ", 50203: "EL TRIUNFO", 50250: "LA MANÁ", 50251: "GUASAGANDA (CAB.EN GUASAGANDA", 50252: "PUCAYACU"},
                    503: {50350: "EL CORAZÓN", 50351: "MORASPUNGO", 50352: "PINLLOPATA", 50353: "RAMÓN CAMPAÑA"},
                    504: {50450: "PUJILÍ", 50451: "ANGAMARCA", 50452: "CHUCCHILÁN (CHUGCHILÁN)", 50453: "GUANGAJE", 50454: "ISINLIBÍ (ISINLIVÍ)", 50455: "LA VICTORIA", 50456: "PILALÓ", 50457: "TINGO", 50458: "ZUMBAHUA"},
                    505: {50550: "SAN MIGUEL", 50551: "ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)", 50552: "CUSUBAMBA", 50553: "MULALILLO", 50554: "MULLIQUINDIL (SANTA ANA)", 50555: "PANSALEO"},
                    506: {50650: "SAQUISILÍ", 50651: "CANCHAGUA", 50652: "CHANTILÍN", 50653: "COCHAPAMBA"},
                    507: {50750: "SIGCHOS", 50751: "CHUGCHILLÁN", 50752: "ISINLIVÍ", 50753: "LAS PAMPAS", 50754: "PALO QUEMADO"},
                    601: {60101: "LIZARZABURU", 60102: "MALDONADO", 60103: "VELASCO", 60104: "VELOZ", 60105: "YARUQUÍES", 60150: "RIOBAMBA", 60151: "CACHA (CAB. EN MACHÁNGARA)", 60152: "CALPI", 60153: "CUBIJÍES", 60154: "FLORES", 60155: "LICÁN", 60156: "LICTO", 60157: "PUNGALÁ", 60158: "PUNÍN", 60159: "QUIMIAG", 60160: "SAN JUAN", 60161: "SAN LUIS"},
                    602: {60250: "ALAUSÍ", 60251: "ACHUPALLAS", 60252: "CUMANDÁ", 60253: "GUASUNTOS", 60254: "HUIGRA", 60255: "MULTITUD", 60256: "PISTISHÍ (NARIZ DEL DIABLO)", 60257: "PUMALLACTA", 60258: "SEVILLA", 60259: "SIBAMBE", 60260: "TIXÁN"},
                    603: {60301: "CAJABAMBA", 60302: "SICALPA", 60350: "VILLA LA UNIÓN (CAJABAMBA)", 60351: "CAÑI", 60352: "COLUMBE", 60353: "JUAN DE VELASCO (PANGOR)", 60354: "SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)"},
                    604: {60450: "CHAMBO"},
                    605: {60550: "CHUNCHI", 60551: "CAPZOL", 60552: "COMPUD", 60553: "GONZOL", 60554: "LLAGOS"},
                    606: {60650: "GUAMOTE", 60651: "CEBADAS", 60652: "PALMIRA"},
                    607: {60701: "EL ROSARIO", 60702: "LA MATRIZ", 60750: "GUANO", 60751: "GUANANDO", 60752: "ILAPO", 60753: "LA PROVIDENCIA", 60754: "SAN ANDRÉS", 60755: "SAN GERARDO DE PACAICAGUÁN", 60756: "SAN ISIDRO DE PATULÚ", 60757: "SAN JOSÉ DEL CHAZO", 60758: "SANTA FÉ DE GALÁN", 60759: "VALPARAÍSO"},
                    608: {60850: "PALLATANGA"},
                    609: {60950: "PENIPE", 60951: "EL ALTAR", 60952: "MATUS", 60953: "PUELA", 60954: "SAN ANTONIO DE BAYUSHIG", 60955: "LA CANDELARIA", 60956: "BILBAO (CAB.EN QUILLUYACU)"},
                    610: {61050: "CUMANDÁ"},
                    701: {70101: "LA PROVIDENCIA", 70102: "MACHALA", 70103: "PUERTO BOLÍVAR", 70104: "NUEVE DE MAYO", 70105: "EL CAMBIO", 70150: "MACHALA", 70151: "EL CAMBIO", 70152: "EL RETIRO"},
                    702: {70250: "ARENILLAS", 70251: "CHACRAS", 70252: "LA LIBERTAD", 70253: "LAS LAJAS (CAB. EN LA VICTORIA)", 70254: "PALMALES", 70255: "CARCABÓN"},
                    703: {70350: "PACCHA", 70351: "AYAPAMBA", 70352: "CORDONCILLO", 70353: "MILAGRO", 70354: "SAN JOSÉ", 70355: "SAN JUAN DE CERRO AZUL"},
                    704: {70450: "BALSAS", 70451: "BELLAMARÍA"},
                    705: {70550: "CHILLA"},
                    706: {70650: "EL GUABO", 70651: "BARBONES (SUCRE)", 70652: "LA IBERIA", 70653: "TENDALES (CAB.EN PUERTO TENDALES)", 70654: "RÍO BONITO"},
                    707: {70701: "ECUADOR", 70702: "EL PARAÍSO", 70703: "HUALTACO", 70704: "MILTON REYES", 70705: "UNIÓN LOJANA", 70750: "HUAQUILLAS"},
                    708: {70850: "MARCABELÍ", 70851: "EL INGENIO"},
                    709: {70901: "BOLÍVAR", 70902: "LOMA DE FRANCO", 70903: "OCHOA LEÓN (MATRIZ)", 70904: "TRES CERRITOS", 70950: "PASAJE", 70951: "BUENAVISTA", 70952: "CASACAY", 70953: "LA PEAÑA", 70954: "PROGRESO", 70955: "UZHCURRUMI", 70956: "CAÑAQUEMADA"},
                    710: {71001: "LA MATRIZ", 71002: "LA SUSAYA", 71003: "PIÑAS GRANDE", 71050: "PIÑAS", 71051: "CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)", 71052: "LA BOCANA", 71053: "MOROMORO (CAB. EN EL VADO)", 71054: "PIEDRAS", 71055: "SAN ROQUE (AMBROSIO MALDONADO)", 71056: "SARACAY"},
                    711: {71150: "PORTOVELO", 71151: "CURTINCAPA", 71152: "MORALES", 71153: "SALATÍ"},
                    712: {71201: "SANTA ROSA", 71202: "PUERTO JELÍ", 71203: "BALNEARIO JAMBELÍ (SATÉLITE)", 71204: "JUMÓN (SATÉLITE)", 71205: "NUEVO SANTA ROSA", 71250: "SANTA ROSA", 71251: "BELLAVISTA", 71252: "JAMBELÍ", 71253: "LA AVANZADA", 71254: "SAN ANTONIO", 71255: "TORATA", 71256: "VICTORIA", 71257: "BELLAMARÍA"},
                    713: {71350: "ZARUMA", 71351: "ABAÑÍN", 71352: "ARCAPAMBA", 71353: "GUANAZÁN", 71354: "GUIZHAGUIÑA", 71355: "HUERTAS", 71356: "MALVAS", 71357: "MULUNCAY GRANDE", 71358: "SINSAO", 71359: "SALVIAS"},
                    714: {71401: "LA VICTORIA", 71402: "PLATANILLOS", 71403: "VALLE HERMOSO", 71450: "LA VICTORIA", 71451: "LA LIBERTAD", 71452: "EL PARAÍSO", 71453: "SAN ISIDRO"},
                    801: {80101: "BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)", 80102: "5 DE AGOSTO", 80103: "ESMERALDAS", 80104: "LUIS TELLO (LAS PALMAS)", 80105: "SIMÓN PLATA TORRES", 80150: "ESMERALDAS", 80151: "ATACAMES", 80152: "CAMARONES (CAB. EN SAN VICENTE)", 80153: "CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)", 80154: "CHINCA", 80155: "CHONTADURO", 80156: "CHUMUNDÉ", 80157: "LAGARTO", 80158: "LA UNIÓN", 80159: "MAJUA", 80160: "MONTALVO (CAB. EN HORQUETA)", 80161: "RÍO VERDE", 80162: "ROCAFUERTE", 80163: "SAN MATEO", 80164: "SÚA (CAB. EN LA BOCANA)", 80165: "TABIAZO", 80166: "TACHINA", 80167: "TONCHIGÜE", 80168: "VUELTA LARGA"},
                    802: {80250: "VALDEZ (LIMONES)", 80251: "ANCHAYACU", 80252: "ATAHUALPA (CAB. EN CAMARONES)", 80253: "BORBÓN", 80254: "LA TOLA", 80255: "LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)", 80256: "MALDONADO", 80257: "PAMPANAL DE BOLÍVAR", 80258: "SAN FRANCISCO DE ONZOLE", 80259: "SANTO DOMINGO DE ONZOLE", 80260: "SELVA ALEGRE", 80261: "TELEMBÍ", 80262: "COLÓN ELOY DEL MARÍA", 80263: "SAN JOSÉ DE CAYAPAS", 80264: "TIMBIRÉ"},
                    803: {80350: "MUISNE", 80351: "BOLÍVAR", 80352: "DAULE", 80353: "GALERA", 80354: "QUINGUE (OLMEDO PERDOMO FRANCO)", 80355: "SALIMA", 80356: "SAN FRANCISCO", 80357: "SAN GREGORIO", 80358: "SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)"},
                    804: {80450: "ROSA ZÁRATE (QUININDÉ)", 80451: "CUBE", 80452: "CHURA (CHANCAMA) (CAB. EN EL YERBERO)", 80453: "MALIMPIA", 80454: "VICHE", 80455: "LA UNIÓN"},
                    805: {80550: "SAN LORENZO", 80551: "ALTO TAMBO (CAB. EN GUADUAL)", 80552: "ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)", 80553: "CALDERÓN", 80554: "CARONDELET", 80555: "5 DE JUNIO (CAB. EN UIMBI)", 80556: "CONCEPCIÓN", 80557: "MATAJE (CAB. EN SANTANDER)", 80558: "SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)", 80559: "SANTA RITA", 80560: "TAMBILLO", 80561: "TULULBÍ (CAB. EN RICAURTE)", 80562: "URBINA"},
                    806: {80650: "ATACAMES", 80651: "LA UNIÓN", 80652: "SÚA (CAB. EN LA BOCANA)", 80653: "TONCHIGÜE", 80654: "TONSUPA"},
                    807: {80750: "RIOVERDE", 80751: "CHONTADURO", 80752: "CHUMUNDÉ", 80753: "LAGARTO", 80754: "MONTALVO (CAB. EN HORQUETA)", 80755: "ROCAFUERTE"},
                    808: {80850: "LA CONCORDIA", 80851: "MONTERREY", 80852: "LA VILLEGAS", 80853: "PLAN PILOTO"},
                    901: {90101: "AYACUCHO", 90102: "BOLÍVAR (SAGRARIO)", 90103: "CARBO (CONCEPCIÓN)", 90104: "FEBRES CORDERO", 90105: "GARCÍA MORENO", 90106: "LETAMENDI", 90107: "NUEVE DE OCTUBRE", 90108: "OLMEDO (SAN ALEJO)", 90109: "ROCA", 90110: "ROCAFUERTE", 90111: "SUCRE", 90112: "TARQUI", 90113: "URDANETA", 90114: "XIMENA", 90115: "PASCUALES", 90150: "GUAYAQUIL", 90151: "CHONGÓN", 90152: "JUAN GÓMEZ RENDÓN (PROGRESO)", 90153: "MORRO", 90154: "PASCUALES", 90155: "PLAYAS (GRAL. VILLAMIL)", 90156: "POSORJA", 90157: "PUNÁ", 90158: "TENGUEL"},
                    902: {90250: "ALFREDO BAQUERIZO MORENO (JUJÁN)"},
                    903: {90350: "BALAO"},
                    904: {90450: "BALZAR"},
                    905: {90550: "COLIMES", 90551: "SAN JACINTO"},
                    906: {90601: "DAULE", 90602: "LA AURORA (SATÉLITE)", 90603: "BANIFE", 90604: "EMILIANO CAICEDO MARCOS", 90605: "MAGRO", 90606: "PADRE JUAN BAUTISTA AGUIRRE", 90607: "SANTA CLARA", 90608: "VICENTE PIEDRAHITA", 90650: "DAULE", 90651: "ISIDRO AYORA (SOLEDAD)", 90652: "JUAN BAUTISTA AGUIRRE (LOS TINTOS)", 90653: "LAUREL", 90654: "LIMONAL", 90655: "LOMAS DE SARGENTILLO", 90656: "LOS LOJAS (ENRIQUE BAQUERIZO MORENO)", 90657: "PIEDRAHITA (NOBOL)"},
                    907: {90701: "ELOY ALFARO (DURÁN)", 90702: "EL RECREO", 90750: "ELOY ALFARO (DURÁN)"},
                    908: {90850: "VELASCO IBARRA (EL EMPALME)", 90851: "GUAYAS (PUEBLO NUEVO)", 90852: "EL ROSARIO"},
                    909: {90950: "EL TRIUNFO"},
                    910: {91050: "MILAGRO", 91051: "CHOBO", 91052: "GENERAL ELIZALDE (BUCAY)", 91053: "MARISCAL SUCRE (HUAQUES)", 91054: "ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)"},
                    911: {91150: "NARANJAL", 91151: "JESÚS MARÍA", 91152: "SAN CARLOS", 91153: "SANTA ROSA DE FLANDES", 91154: "TAURA"},
                    912: {91250: "NARANJITO"},
                    913: {91350: "PALESTINA"},
                    914: {91450: "PEDRO CARBO", 91451: "VALLE DE LA VIRGEN", 91452: "SABANILLA"},
                    916: {91601: "SAMBORONDÓN", 91602: "LA PUNTILLA (SATÉLITE)", 91650: "SAMBORONDÓN", 91651: "TARIFA"},
                    918: {91850: "SANTA LUCÍA"},
                    919: {91901: "BOCANA", 91902: "CANDILEJOS", 91903: "CENTRAL", 91904: "PARAÍSO", 91905: "SAN MATEO", 91950: "EL SALITRE (LAS RAMAS)", 91951: "GRAL. VERNAZA (DOS ESTEROS)", 91952: "LA VICTORIA (ÑAUZA)", 91953: "JUNQUILLAL"},
                    920: {92050: "SAN JACINTO DE YAGUACHI", 92051: "CRNEL. LORENZO DE GARAICOA (PEDREGAL)", 92052: "CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)", 92053: "GRAL. PEDRO J. MONTERO (BOLICHE)", 92054: "SIMÓN BOLÍVAR", 92055: "YAGUACHI VIEJO (CONE)", 92056: "VIRGEN DE FÁTIMA"},
                    921: {92150: "GENERAL VILLAMIL (PLAYAS)"},
                    922: {92250: "SIMÓN BOLÍVAR", 92251: "CRNEL.LORENZO DE GARAICOA (PEDREGAL)"},
                    923: {92350: "CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)"},
                    924: {92450: "LOMAS DE SARGENTILLO", 92451: "ISIDRO AYORA (SOLEDAD)"},
                    925: {92550: "NARCISA DE JESÚS"},
                    927: {92750: "GENERAL ANTONIO ELIZALDE (BUCAY)"},
                    928: {92850: "ISIDRO AYORA"},
                    1001: {100101: "CARANQUI", 100102: "GUAYAQUIL DE ALPACHACA", 100103: "SAGRARIO", 100104: "SAN FRANCISCO", 100105: "LA DOLOROSA DEL PRIORATO", 100150: "SAN MIGUEL DE IBARRA", 100151: "AMBUQUÍ", 100152: "ANGOCHAGUA", 100153: "CAROLINA", 100154: "LA ESPERANZA", 100155: "LITA", 100156: "SALINAS", 100157: "SAN ANTONIO"},
                    1002: {100201: "ANDRADE MARÍN (LOURDES)", 100202: "ATUNTAQUI", 100250: "ATUNTAQUI", 100251: "IMBAYA (SAN LUIS DE COBUENDO)", 100252: "SAN FRANCISCO DE NATABUELA", 100253: "SAN JOSÉ DE CHALTURA", 100254: "SAN ROQUE"},
                    1003: {100301: "SAGRARIO", 100302: "SAN FRANCISCO", 100350: "COTACACHI", 100351: "APUELA", 100352: "GARCÍA MORENO (LLURIMAGUA)", 100353: "IMANTAG", 100354: "PEÑAHERRERA", 100355: "PLAZA GUTIÉRREZ (CALVARIO)", 100356: "QUIROGA", 100357: "6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)", 100358: "VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO"},
                    1004: {100401: "JORDÁN", 100402: "SAN LUIS", 100450: "OTAVALO", 100451: "DR. MIGUEL EGAS CABEZAS (PEGUCHE)", 100452: "EUGENIO ESPEJO (CALPAQUÍ)", 100453: "GONZÁLEZ SUÁREZ", 100454: "PATAQUÍ", 100455: "SAN JOSÉ DE QUICHINCHE", 100456: "SAN JUAN DE ILUMÁN", 100457: "SAN PABLO", 100458: "SAN RAFAEL", 100459: "SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)"},
                    1005: {100550: "PIMAMPIRO", 100551: "CHUGÁ", 100552: "MARIANO ACOSTA", 100553: "SAN FRANCISCO DE SIGSIPAMBA"},
                    1006: {100650: "URCUQUÍ CABECERA CANTONAL", 100651: "CAHUASQUÍ", 100652: "LA MERCED DE BUENOS AIRES", 100653: "PABLO ARENAS", 100654: "SAN BLAS", 100655: "TUMBABIRO"},
                    1101: {110101: "EL SAGRARIO", 110102: "SAN SEBASTIÁN", 110103: "SUCRE", 110104: "VALLE", 110150: "LOJA", 110151: "CHANTACO", 110152: "CHUQUIRIBAMBA", 110153: "EL CISNE", 110154: "GUALEL", 110155: "JIMBILLA", 110156: "MALACATOS (VALLADOLID)", 110157: "SAN LUCAS", 110158: "SAN PEDRO DE VILCABAMBA", 110159: "SANTIAGO", 110160: "TAQUIL (MIGUEL RIOFRÍO)", 110161: "VILCABAMBA (VICTORIA)", 110162: "YANGANA (ARSENIO CASTILLO)", 110163: "QUINARA"},
                    1102: {110201: "CARIAMANGA", 110202: "CHILE", 110203: "SAN VICENTE", 110250: "CARIAMANGA", 110251: "COLAISACA", 110252: "EL LUCERO", 110253: "UTUANA", 110254: "SANGUILLÍN"},
                    1103: {110301: "CATAMAYO", 110302: "SAN JOSÉ", 110350: "CATAMAYO (LA TOMA)", 110351: "EL TAMBO", 110352: "GUAYQUICHUMA", 110353: "SAN PEDRO DE LA BENDITA", 110354: "ZAMBI"},
                    1104: {110450: "CELICA", 110451: "CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)", 110452: "CHAQUINAL", 110453: "12 DE DICIEMBRE (CAB. EN ACHIOTES)", 110454: "PINDAL (FEDERICO PÁEZ)", 110455: "POZUL (SAN JUAN DE POZUL)", 110456: "SABANILLA", 110457: "TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA"},
                    1105: {110550: "CHAGUARPAMBA", 110551: "BUENAVISTA", 110552: "EL ROSARIO", 110553: "SANTA RUFINA", 110554: "AMARILLOS"},
                    1106: {110650: "AMALUZA", 110651: "BELLAVISTA", 110652: "JIMBURA", 110653: "SANTA TERESITA", 110654: "27 DE ABRIL (CAB. EN LA NARANJA)", 110655: "EL INGENIO", 110656: "EL AIRO"},
                    1107: {110750: "GONZANAMÁ", 110751: "CHANGAIMINA (LA LIBERTAD)", 110752: "FUNDOCHAMBA", 110753: "NAMBACOLA", 110754: "PURUNUMA (EGUIGUREN)", 110755: "QUILANGA (LA PAZ)", 110756: "SACAPALCA", 110757: "SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)"},
                    1108: {110801: "GENERAL ELOY ALFARO (SAN SEBASTIÁN)", 110802: "MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)", 110850: "MACARÁ", 110851: "LARAMA", 110852: "LA VICTORIA", 110853: "SABIANGO (LA CAPILLA)"},
                    1109: {110901: "CATACOCHA", 110902: "LOURDES", 110950: "CATACOCHA", 110951: "CANGONAMÁ", 110952: "GUACHANAMÁ", 110953: "LA TINGUE", 110954: "LAURO GUERRERO", 110955: "OLMEDO (SANTA BÁRBARA)", 110956: "ORIANGA", 110957: "SAN ANTONIO", 110958: "CASANGA", 110959: "YAMANA"},
                    1110: {111050: "ALAMOR", 111051: "CIANO", 111052: "EL ARENAL", 111053: "EL LIMO (MARIANA DE JESÚS)", 111054: "MERCADILLO", 111055: "VICENTINO"},
                    1111: {111150: "SARAGURO", 111151: "EL PARAÍSO DE CELÉN", 111152: "EL TABLÓN", 111153: "LLUZHAPA", 111154: "MANÚ", 111155: "SAN ANTONIO DE QUMBE (CUMBE)", 111156: "SAN PABLO DE TENTA", 111157: "SAN SEBASTIÁN DE YÚLUC", 111158: "SELVA ALEGRE", 111159: "URDANETA (PAQUISHAPA)", 111160: "SUMAYPAMBA"},
                    1112: {111250: "SOZORANGA", 111251: "NUEVA FÁTIMA", 111252: "TACAMOROS"},
                    1113: {111350: "ZAPOTILLO", 111351: "MANGAHURCO (CAZADEROS)", 111352: "GARZAREAL", 111353: "LIMONES", 111354: "PALETILLAS", 111355: "BOLASPAMBA"},
                    1114: {111450: "PINDAL", 111451: "CHAQUINAL", 111452: "12 DE DICIEMBRE (CAB.EN ACHIOTES)", 111453: "MILAGROS"},
                    1115: {111550: "QUILANGA", 111551: "FUNDOCHAMBA", 111552: "SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)"},
                    1116: {111650: "OLMEDO", 111651: "LA TINGUE"},
                    1201: {120101: "CLEMENTE BAQUERIZO", 120102: "DR. CAMILO PONCE", 120103: "BARREIRO", 120104: "EL SALTO", 120150: "BABAHOYO", 120151: "BARREIRO (SANTA RITA)", 120152: "CARACOL", 120153: "FEBRES CORDERO (LAS JUNTAS)", 120154: "PIMOCHA", 120155: "LA UNIÓN"},
                    1202: {120250: "BABA", 120251: "GUARE", 120252: "ISLA DE BEJUCAL"},
                    1203: {120350: "MONTALVO"},
                    1204: {120450: "PUEBLOVIEJO", 120451: "PUERTO PECHICHE", 120452: "SAN JUAN"},
                    1205: {120501: "QUEVEDO", 120502: "SAN CAMILO", 120503: "SAN JOSÉ", 120504: "GUAYACÁN", 120505: "NICOLÁS INFANTE DÍAZ", 120506: "SAN CRISTÓBAL", 120507: "SIETE DE OCTUBRE", 120508: "24 DE MAYO", 120509: "VENUS DEL RÍO QUEVEDO", 120510: "VIVA ALFARO", 120550: "QUEVEDO", 120551: "BUENA FÉ", 120552: "MOCACHE", 120553: "SAN CARLOS", 120554: "VALENCIA", 120555: "LA ESPERANZA"},
                    1206: {120650: "CATARAMA", 120651: "RICAURTE"},
                    1207: {120701: "10 DE NOVIEMBRE", 120750: "VENTANAS", 120751: "QUINSALOMA", 120752: "ZAPOTAL", 120753: "CHACARITA", 120754: "LOS ÁNGELES"},
                    1208: {120850: "VINCES", 120851: "ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)", 120852: "PALENQUE"},
                    1209: {120950: "PALENQUE"},
                    1210: {121001: "SAN JACINTO DE BUENA FÉ", 121002: "7 DE AGOSTO", 121003: "11 DE OCTUBRE", 121050: "SAN JACINTO DE BUENA FÉ", 121051: "PATRICIA PILAR"},
                    1211: {121150: "VALENCIA"},
                    1212: {121250: "MOCACHE"},
                    1213: {121350: "QUINSALOMA"},
                    1301: {130101: "PORTOVIEJO", 130102: "12 DE MARZO", 130103: "COLÓN", 130104: "PICOAZÁ", 130105: "SAN PABLO", 130106: "ANDRÉS DE VERA", 130107: "FRANCISCO PACHECO", 130108: "18 DE OCTUBRE", 130109: "SIMÓN BOLÍVAR", 130150: "PORTOVIEJO", 130151: "ABDÓN CALDERÓN (SAN FRANCISCO)", 130152: "ALHAJUELA (BAJO GRANDE)", 130153: "CRUCITA", 130154: "PUEBLO NUEVO", 130155: "RIOCHICO (RÍO CHICO)", 130156: "SAN PLÁCIDO", 130157: "CHIRIJOS"},
                    1302: {130250: "CALCETA", 130251: "MEMBRILLO", 130252: "QUIROGA"},
                    1303: {130301: "CHONE", 130302: "SANTA RITA", 130350: "CHONE", 130351: "BOYACÁ", 130352: "CANUTO", 130353: "CONVENTO", 130354: "CHIBUNGA", 130355: "ELOY ALFARO", 130356: "RICAURTE", 130357: "SAN ANTONIO"},
                    1304: {130401: "EL CARMEN", 130402: "4 DE DICIEMBRE", 130450: "EL CARMEN", 130451: "WILFRIDO LOOR MOREIRA (MAICITO)", 130452: "SAN PEDRO DE SUMA"},
                    1305: {130550: "FLAVIO ALFARO", 130551: "SAN FRANCISCO DE NOVILLO (CAB. EN", 130552: "ZAPALLO"},
                    1306: {130601: "DR. MIGUEL MORÁN LUCIO", 130602: "MANUEL INOCENCIO PARRALES Y GUALE", 130603: "SAN LORENZO DE JIPIJAPA", 130650: "JIPIJAPA", 130651: "AMÉRICA", 130652: "EL ANEGADO (CAB. EN ELOY ALFARO)", 130653: "JULCUY", 130654: "LA UNIÓN", 130655: "MACHALILLA", 130656: "MEMBRILLAL", 130657: "PEDRO PABLO GÓMEZ", 130658: "PUERTO DE CAYO", 130659: "PUERTO LÓPEZ"},
                    1307: {130750: "JUNÍN"},
                    1308: {130801: "LOS ESTEROS", 130802: "MANTA", 130803: "SAN MATEO", 130804: "TARQUI", 130805: "ELOY ALFARO", 130850: "MANTA", 130851: "SAN LORENZO", 130852: "SANTA MARIANITA (BOCA DE PACOCHE)"},
                    1309: {130901: "ANIBAL SAN ANDRÉS", 130902: "MONTECRISTI", 130903: "EL COLORADO", 130904: "GENERAL ELOY ALFARO", 130905: "LEONIDAS PROAÑO", 130950: "MONTECRISTI", 130951: "JARAMIJÓ", 130952: "LA PILA"},
                    1310: {131050: "PAJÁN", 131051: "CAMPOZANO (LA PALMA DE PAJÁN)", 131052: "CASCOL", 131053: "GUALE", 131054: "LASCANO"},
                    1311: {131150: "PICHINCHA", 131151: "BARRAGANETE", 131152: "SAN SEBASTIÁN"},
                    1312: {131250: "ROCAFUERTE"},
                    1313: {131301: "SANTA ANA", 131302: "LODANA", 131350: "SANTA ANA DE VUELTA LARGA", 131351: "AYACUCHO", 131352: "HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)", 131353: "LA UNIÓN", 131354: "OLMEDO", 131355: "SAN PABLO (CAB. EN PUEBLO NUEVO)"},
                    1314: {131401: "BAHÍA DE CARÁQUEZ", 131402: "LEONIDAS PLAZA GUTIÉRREZ", 131450: "BAHÍA DE CARÁQUEZ", 131451: "CANOA", 131452: "COJIMÍES", 131453: "CHARAPOTÓ", 131454: "10 DE AGOSTO", 131455: "JAMA", 131456: "PEDERNALES", 131457: "SAN ISIDRO", 131458: "SAN VICENTE"},
                    1315: {131550: "TOSAGUA", 131551: "BACHILLERO", 131552: "ANGEL PEDRO GILER (LA ESTANCILLA)"},
                    1316: {131650: "SUCRE", 131651: "BELLAVISTA", 131652: "NOBOA", 131653: "ARQ. SIXTO DURÁN BALLÉN"},
                    1317: {131750: "PEDERNALES", 131751: "COJIMÍES", 131752: "10 DE AGOSTO", 131753: "ATAHUALPA"},
                    1318: {131850: "OLMEDO"},
                    1319: {131950: "PUERTO LÓPEZ", 131951: "MACHALILLA", 131952: "SALANGO"},
                    1320: {132050: "JAMA"},
                    1321: {132150: "JARAMIJÓ"},
                    1322: {132250: "SAN VICENTE", 132251: "CANOA"},
                    1401: {140150: "MACAS", 140151: "ALSHI (CAB. EN 9 DE OCTUBRE)", 140152: "CHIGUAZA", 140153: "GENERAL PROAÑO", 140154: "HUASAGA (CAB.EN WAMPUIK)", 140155: "MACUMA", 140156: "SAN ISIDRO", 140157: "SEVILLA DON BOSCO", 140158: "SINAÍ", 140159: "TAISHA", 140160: "ZUÑA (ZÚÑAC)", 140161: "TUUTINENTZA", 140162: "CUCHAENTZA", 140163: "SAN JOSÉ DE MORONA", 140164: "RÍO BLANCO"},
                    1402: {140201: "GUALAQUIZA", 140202: "MERCEDES MOLINA", 140250: "GUALAQUIZA", 140251: "AMAZONAS (ROSARIO DE CUYES)", 140252: "BERMEJOS", 140253: "BOMBOIZA", 140254: "CHIGÜINDA", 140255: "EL ROSARIO", 140256: "NUEVA TARQUI", 140257: "SAN MIGUEL DE CUYES", 140258: "EL IDEAL"},
                    1403: {140350: "GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)", 140351: "INDANZA", 140352: "PAN DE AZÚCAR", 140353: "SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO", 140354: "SAN CARLOS DE LIMÓN (SAN CARLOS DEL", 140355: "SAN JUAN BOSCO", 140356: "SAN MIGUEL DE CONCHAY", 140357: "SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)", 140358: "YUNGANZA (CAB. EN EL ROSARIO)"},
                    1404: {140450: "PALORA (METZERA)", 140451: "ARAPICOS", 140452: "CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)", 140453: "HUAMBOYA", 140454: "SANGAY (CAB. EN NAYAMANACA)"},
                    1405: {140550: "SANTIAGO DE MÉNDEZ", 140551: "COPAL", 140552: "CHUPIANZA", 140553: "PATUCA", 140554: "SAN LUIS DE EL ACHO (CAB. EN EL ACHO)", 140555: "SANTIAGO", 140556: "TAYUZA", 140557: "SAN FRANCISCO DE CHINIMBIMI"},
                    1406: {140650: "SUCÚA", 140651: "ASUNCIÓN", 140652: "HUAMBI", 140653: "LOGROÑO", 140654: "YAUPI", 140655: "SANTA MARIANITA DE JESÚS"},
                    1407: {140750: "HUAMBOYA", 140751: "CHIGUAZA", 140752: "PABLO SEXTO"},
                    1408: {140850: "SAN JUAN BOSCO", 140851: "PAN DE AZÚCAR", 140852: "SAN CARLOS DE LIMÓN", 140853: "SAN JACINTO DE WAKAMBEIS", 140854: "SANTIAGO DE PANANZA"},
                    1409: {140950: "TAISHA", 140951: "HUASAGA (CAB. EN WAMPUIK)", 140952: "MACUMA", 140953: "TUUTINENTZA", 140954: "PUMPUENTSA"},
                    1410: {141050: "LOGROÑO", 141051: "YAUPI", 141052: "SHIMPIS"},
                    1411: {141150: "PABLO SEXTO"},
                    1412: {141250: "SANTIAGO", 141251: "SAN JOSÉ DE MORONA"},
                    1501: {150150: "TENA", 150151: "AHUANO", 150152: "CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)", 150153: "CHONTAPUNTA", 150154: "PANO", 150155: "PUERTO MISAHUALLI", 150156: "PUERTO NAPO", 150157: "TÁLAG", 150158: "SAN JUAN DE MUYUNA"},
                    1503: {150350: "ARCHIDONA", 150351: "AVILA", 150352: "COTUNDO", 150353: "LORETO", 150354: "SAN PABLO DE USHPAYACU", 150355: "PUERTO MURIALDO"},
                    1504: {150450: "EL CHACO", 150451: "GONZALO DíAZ DE PINEDA (EL BOMBÓN)", 150452: "LINARES", 150453: "OYACACHI", 150454: "SANTA ROSA", 150455: "SARDINAS"},
                    1507: {150750: "BAEZA", 150751: "COSANGA", 150752: "CUYUJA", 150753: "PAPALLACTA", 150754: "SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)", 150755: "SAN JOSÉ DEL PAYAMINO", 150756: "SUMACO"},
                    1509: {150950: "CARLOS JULIO AROSEMENA TOLA"},
                    1601: {160150: "PUYO", 160151: "ARAJUNO", 160152: "CANELOS", 160153: "CURARAY", 160154: "DIEZ DE AGOSTO", 160155: "FÁTIMA", 160156: "MONTALVO (ANDOAS)", 160157: "POMONA", 160158: "RÍO CORRIENTES", 160159: "RÍO TIGRE", 160160: "SANTA CLARA", 160161: "SARAYACU", 160162: "SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)", 160163: "TARQUI", 160164: "TENIENTE HUGO ORTIZ", 160165: "VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)", 160166: "EL TRIUNFO"},
                    1602: {160250: "MERA", 160251: "MADRE TIERRA", 160252: "SHELL"},
                    1603: {160350: "SANTA CLARA", 160351: "SAN JOSÉ"},
                    1604: {160450: "ARAJUNO", 160451: "CURARAY"},
                    1701: {170101: "BELISARIO QUEVEDO", 170102: "CARCELÉN", 170103: "CENTRO HISTÓRICO", 170104: "COCHAPAMBA", 170105: "COMITÉ DEL PUEBLO", 170106: "COTOCOLLAO", 170107: "CHILIBULO", 170108: "CHILLOGALLO", 170109: "CHIMBACALLE", 170110: "EL CONDADO", 170111: "GUAMANÍ", 170112: "IÑAQUITO", 170113: "ITCHIMBÍA", 170114: "JIPIJAPA", 170115: "KENNEDY", 170116: "LA ARGELIA", 170117: "LA CONCEPCIÓN", 170118: "LA ECUATORIANA", 170119: "LA FERROVIARIA", 170120: "LA LIBERTAD", 170121: "LA MAGDALENA", 170122: "LA MENA", 170123: "MARISCAL SUCRE", 170124: "PONCEANO", 170125: "PUENGASÍ", 170126: "QUITUMBE", 170127: "RUMIPAMBA", 170128: "SAN BARTOLO", 170129: "SAN ISIDRO DEL INCA", 170130: "SAN JUAN", 170131: "SOLANDA", 170132: "TURUBAMBA", 170150: "QUITO DISTRITO METROPOLITANO", 170151: "ALANGASÍ", 170152: "AMAGUAÑA", 170153: "ATAHUALPA", 170154: "CALACALÍ", 170155: "CALDERÓN", 170156: "CONOCOTO", 170157: "CUMBAYÁ", 170158: "CHAVEZPAMBA", 170159: "CHECA", 170160: "EL QUINCHE", 170161: "GUALEA", 170162: "GUANGOPOLO", 170163: "GUAYLLABAMBA", 170164: "LA MERCED", 170165: "LLANO CHICO", 170166: "LLOA", 170167: "MINDO", 170168: "NANEGAL", 170169: "NANEGALITO", 170170: "NAYÓN", 170171: "NONO", 170172: "PACTO", 170173: "PEDRO VICENTE MALDONADO", 170174: "PERUCHO", 170175: "PIFO", 170176: "PÍNTAG", 170177: "POMASQUI", 170178: "PUÉLLARO", 170179: "PUEMBO", 170180: "SAN ANTONIO", 170181: "SAN JOSÉ DE MINAS", 170182: "SAN MIGUEL DE LOS BANCOS", 170183: "TABABELA", 170184: "TUMBACO", 170185: "YARUQUÍ", 170186: "ZAMBIZA", 170187: "PUERTO QUITO"},
                    1702: {170201: "AYORA", 170202: "CAYAMBE", 170203: "JUAN MONTALVO", 170250: "CAYAMBE", 170251: "ASCÁZUBI", 170252: "CANGAHUA", 170253: "OLMEDO (PESILLO)", 170254: "OTÓN", 170255: "SANTA ROSA DE CUZUBAMBA"},
                    1703: {170350: "MACHACHI", 170351: "ALÓAG", 170352: "ALOASÍ", 170353: "CUTUGLAHUA", 170354: "EL CHAUPI", 170355: "MANUEL CORNEJO ASTORGA (TANDAPI)", 170356: "TAMBILLO", 170357: "UYUMBICHO"},
                    1704: {170450: "TABACUNDO", 170451: "LA ESPERANZA", 170452: "MALCHINGUÍ", 170453: "TOCACHI", 170454: "TUPIGACHI"},
                    1705: {170501: "SANGOLQUÍ", 170502: "SAN PEDRO DE TABOADA", 170503: "SAN RAFAEL", 170550: "SANGOLQUI", 170551: "COTOGCHOA", 170552: "RUMIPAMBA"},
                    1707: {170750: "SAN MIGUEL DE LOS BANCOS", 170751: "MINDO", 170752: "PEDRO VICENTE MALDONADO", 170753: "PUERTO QUITO"},
                    1708: {170850: "PEDRO VICENTE MALDONADO"},
                    1709: {170950: "PUERTO QUITO"},
                    1801: {180101: "ATOCHA – FICOA", 180102: "CELIANO MONGE", 180103: "HUACHI CHICO", 180104: "HUACHI LORETO", 180105: "LA MERCED", 180106: "LA PENÍNSULA", 180107: "MATRIZ", 180108: "PISHILATA", 180109: "SAN FRANCISCO", 180150: "AMBATO", 180151: "AMBATILLO", 180152: "ATAHUALPA (CHISALATA)", 180153: "AUGUSTO N. MARTÍNEZ (MUNDUGLEO)", 180154: "CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)", 180155: "HUACHI GRANDE", 180156: "IZAMBA", 180157: "JUAN BENIGNO VELA", 180158: "MONTALVO", 180159: "PASA", 180160: "PICAIGUA", 180161: "PILAGÜÍN (PILAHÜÍN)", 180162: "QUISAPINCHA (QUIZAPINCHA)", 180163: "SAN BARTOLOMÉ DE PINLLOG", 180164: "SAN FERNANDO (PASA SAN FERNANDO)", 180165: "SANTA ROSA", 180166: "TOTORAS", 180167: "CUNCHIBAMBA", 180168: "UNAMUNCHO"},
                    1802: {180250: "BAÑOS DE AGUA SANTA", 180251: "LLIGUA", 180252: "RÍO NEGRO", 180253: "RÍO VERDE", 180254: "ULBA"},
                    1803: {180350: "CEVALLOS"},
                    1804: {180450: "MOCHA", 180451: "PINGUILÍ"},
                    1805: {180550: "PATATE", 180551: "EL TRIUNFO", 180552: "LOS ANDES (CAB. EN POATUG)", 180553: "SUCRE (CAB. EN SUCRE-PATATE URCU)"},
                    1806: {180650: "QUERO", 180651: "RUMIPAMBA", 180652: "YANAYACU - MOCHAPATA (CAB. EN YANAYACU)"},
                    1807: {180701: "PELILEO", 180702: "PELILEO GRANDE", 180750: "PELILEO", 180751: "BENÍTEZ (PACHANLICA)", 180752: "BOLÍVAR", 180753: "COTALÓ", 180754: "CHIQUICHA (CAB. EN CHIQUICHA GRANDE)", 180755: "EL ROSARIO (RUMICHACA)", 180756: "GARCÍA MORENO (CHUMAQUI)", 180757: "GUAMBALÓ (HUAMBALÓ)", 180758: "SALASACA"},
                    1808: {180801: "CIUDAD NUEVA", 180802: "PÍLLARO", 180850: "PÍLLARO", 180851: "BAQUERIZO MORENO", 180852: "EMILIO MARÍA TERÁN (RUMIPAMBA)", 180853: "MARCOS ESPINEL (CHACATA)", 180854: "PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)", 180855: "SAN ANDRÉS", 180856: "SAN JOSÉ DE POALÓ", 180857: "SAN MIGUELITO"},
                    1809: {180950: "TISALEO", 180951: "QUINCHICOTO"},
                    1901: {190101: "EL LIMÓN", 190102: "ZAMORA", 190150: "ZAMORA", 190151: "CUMBARATZA", 190152: "GUADALUPE", 190153: "IMBANA (LA VICTORIA DE IMBANA)", 190154: "PAQUISHA", 190155: "SABANILLA", 190156: "TIMBARA", 190157: "ZUMBI", 190158: "SAN CARLOS DE LAS MINAS"},
                    1902: {190250: "ZUMBA", 190251: "CHITO", 190252: "EL CHORRO", 190253: "EL PORVENIR DEL CARMEN", 190254: "LA CHONTA", 190255: "PALANDA", 190256: "PUCAPAMBA", 190257: "SAN FRANCISCO DEL VERGEL", 190258: "VALLADOLID", 190259: "SAN ANDRÉS"},
                    1903: {190350: "GUAYZIMI", 190351: "ZURMI", 190352: "NUEVO PARAÍSO"},
                    1904: {190450: "28 DE MAYO (SAN JOSÉ DE YACUAMBI)", 190451: "LA PAZ", 190452: "TUTUPALI"},
                    1905: {190550: "YANTZAZA (YANZATZA)", 190551: "CHICAÑA", 190552: "EL PANGUI", 190553: "LOS ENCUENTROS"},
                    1906: {190650: "EL PANGUI", 190651: "EL GUISME", 190652: "PACHICUTZA", 190653: "TUNDAYME"},
                    1907: {190750: "ZUMBI", 190751: "PAQUISHA", 190752: "TRIUNFO-DORADO", 190753: "PANGUINTZA"},
                    1908: {190850: "PALANDA", 190851: "EL PORVENIR DEL CARMEN", 190852: "SAN FRANCISCO DEL VERGEL", 190853: "VALLADOLID", 190854: "LA CANELA"},
                    1909: {190950: "PAQUISHA", 190951: "BELLAVISTA", 190952: "NUEVO QUITO"},
                    2001: {200150: "PUERTO BAQUERIZO MORENO", 200151: "EL PROGRESO", 200152: "ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)"},
                    2002: {200250: "PUERTO VILLAMIL", 200251: "TOMÁS DE BERLANGA (SANTO TOMÁS)"},
                    2003: {200350: "PUERTO AYORA", 200351: "BELLAVISTA", 200352: "SANTA ROSA (INCLUYE LA ISLA BALTRA)"},
                    2101: {210150: "NUEVA LOJA", 210151: "CUYABENO", 210152: "DURENO", 210153: "GENERAL FARFÁN", 210154: "TARAPOA", 210155: "EL ENO", 210156: "PACAYACU", 210157: "JAMBELÍ", 210158: "SANTA CECILIA", 210159: "AGUAS NEGRAS"},
                    2102: {210250: "EL DORADO DE CASCALES", 210251: "EL REVENTADOR", 210252: "GONZALO PIZARRO", 210253: "LUMBAQUÍ", 210254: "PUERTO LIBRE", 210255: "SANTA ROSA DE SUCUMBÍOS"},
                    2103: {210350: "PUERTO EL CARMEN DEL PUTUMAYO", 210351: "PALMA ROJA", 210352: "PUERTO BOLÍVAR (PUERTO MONTÚFAR)", 210353: "PUERTO RODRÍGUEZ", 210354: "SANTA ELENA"},
                    2104: {210450: "SHUSHUFINDI", 210451: "LIMONCOCHA", 210452: "PAÑACOCHA", 210453: "SAN ROQUE (CAB. EN SAN VICENTE)", 210454: "SAN PEDRO DE LOS COFANES", 210455: "SIETE DE JULIO"},
                    2105: {210550: "LA BONITA", 210551: "EL PLAYÓN DE SAN FRANCISCO", 210552: "LA SOFÍA", 210553: "ROSA FLORIDA", 210554: "SANTA BÁRBARA"},
                    2106: {210650: "EL DORADO DE CASCALES", 210651: "SANTA ROSA DE SUCUMBÍOS", 210652: "SEVILLA"},
                    2107: {210750: "TARAPOA", 210751: "CUYABENO", 210752: "AGUAS NEGRAS"},
                    2201: {220150: "PUERTO FRANCISCO DE ORELLANA (EL COCA)", 220151: "DAYUMA", 220152: "TARACOA (NUEVA ESPERANZA: YUCA)", 220153: "ALEJANDRO LABAKA", 220154: "EL DORADO", 220155: "EL EDÉN", 220156: "GARCÍA MORENO", 220157: "INÉS ARANGO (CAB. EN WESTERN)", 220158: "LA BELLEZA", 220159: "NUEVO PARAÍSO (CAB. EN UNIÓN", 220160: "SAN JOSÉ DE GUAYUSA", 220161: "SAN LUIS DE ARMENIA"},
                    2202: {220201: "TIPITINI", 220250: "NUEVO ROCAFUERTE", 220251: "CAPITÁN AUGUSTO RIVADENEYRA", 220252: "CONONACO", 220253: "SANTA MARÍA DE HUIRIRIMA", 220254: "TIPUTINI", 220255: "YASUNÍ"},
                    2203: {220350: "LA JOYA DE LOS SACHAS", 220351: "ENOKANQUI", 220352: "POMPEYA", 220353: "SAN CARLOS", 220354: "SAN SEBASTIÁN DEL COCA", 220355: "LAGO SAN PEDRO", 220356: "RUMIPAMBA", 220357: "TRES DE NOVIEMBRE", 220358: "UNIÓN MILAGREÑA"},
                    2204: {220450: "LORETO", 220451: "AVILA (CAB. EN HUIRUNO)", 220452: "PUERTO MURIALDO", 220453: "SAN JOSÉ DE PAYAMINO", 220454: "SAN JOSÉ DE DAHUANO", 220455: "SAN VICENTE DE HUATICOCHA"},
                    2301: {230101: "ABRAHAM CALAZACÓN", 230102: "BOMBOLÍ", 230103: "CHIGUILPE", 230104: "RÍO TOACHI", 230105: "RÍO VERDE", 230106: "SANTO DOMINGO DE LOS COLORADOS", 230107: "ZARACAY", 230151: "ALLURIQUÍN", 230152: "PUERTO LIMÓN", 230153: "LUZ DE AMÉRICA", 230154: "SAN JACINTO DEL BÚA", 230155: "VALLE HERMOSO", 230156: "EL ESFUERZO", 230157: "SANTA MARÍA DEL TOACHI"},
                    2401: {240101: "BALLENITA", 240102: "SANTA ELENA", 240150: "SANTA ELENA", 240151: "ATAHUALPA", 240152: "COLONCHE", 240153: "CHANDUY", 240154: "MANGLARALTO", 240155: "SIMÓN BOLÍVAR (JULIO MORENO)", 240156: "SAN JOSÉ DE ANCÓN"},
                    2402: {240250: "LA LIBERTAD"},
                    2403: {240301: "CARLOS ESPINOZA LARREA", 240302: "GRAL. ALBERTO ENRÍQUEZ GALLO", 240303: "VICENTE ROCAFUERTE", 240304: "SANTA ROSA", 240350: "SALINAS", 240351: "ANCONCITO", 240352: "JOSÉ LUIS TAMAYO (MUEY)"},
                    9001: {900151: "LAS GOLONDRINAS"},
                    9003: {900351: "MANGA DEL CURA"},
                    9004: {900451: "EL PIEDRERO"}
                },
                updateCanton: function (init) {
                    if ($scope.$$entity.provincia !== null && $scope.$$entity.provincia !== undefined) {
                        $scope.$$elements.canton.options = $scope.$$layout.canton[$scope.$$entity.provincia];
                    } else {
                        $scope.$$elements.canton.options = {};
                    }
                    if (init !== true) {
                        //$scope.$$entity.canton = null;
                    }
                    this.updateParroquia(init);

                },
                updateParroquia: function (init) {
                    if ($scope.$$entity.canton !== null && $scope.$$entity.canton !== undefined) {
                        $scope.$$elements.parroquia.options = $scope.$$layout.parish[$scope.$$entity.canton];
                    } else {
                        $scope.$$elements.parroquia.options = {};
                    }
                    if (init !== true) {
                        //$scope.$$entity.parroquia = null;
                    }
                },
                nacionality: null
            };

            $scope.$$entity = {
                identificacion: null,
                pasaporte: null,
                primer_nombre: null,
                segundo_nombre: null,
                apellido_materno: null,
                apellido_paterno: null,
                direccion: null,
                barrio: null,
                parroquia: null,
                canton: null,
                provincia: null,
                zona: null,
                telefono: null,
                fecha_nacimiento: null,
                lugar_nacimiento: null,
                nacionalidad: null,
                grupo_cultural: null,
                edad: null,
                genero: null,
                estado_civil: null,
                instruccion: null,
                fecha_admision: null,
                ocupacion: null,
                empresa_trabajo: null,
                tipo_seguro_salud: null,
                referido_de: null,
                contacto_emergencia: null,
                parentezco_contacto_emergencia: null,
                direccion_contacto_emergencia: null,
                telefono_contacto_emergencia: null,
                description: null
            };

            $scope.$watch('$$entity.provincia', function (n, o) {
                $scope.$$layout.updateCanton();
            });
            $scope.$watch('$$entity.canton', function (n, o) {
                $scope.$$layout.updateParroquia();
            });

            var __toDate = function (str) {
                if (str === null || str === undefined) {
                    return null;
                }
                var arr = str.toString().split('-');
                if (arr.length !== 3) {
                    return null;
                }
                return new Date(parseInt(arr[0]), parseInt(arr[1]) - 1, parseInt(arr[2]));
            };
            $scope.$$tinyEntity = {
                data: {
                    patient: null
                },
                populate: function () {
                    this.data.patient = $ng.copy($scope.$$entity);
                    if ($scope.$$elements.is_passport) {
                        this.data.patient.identificacion = this.data.patient.pasaporte;
                    }
                }
            };
            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
                $rootScope.$emit('$$refresh_form008_patient_list');
            };
            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.identificacion = $$data.entity.identificacion;
                $scope.$$entity.primer_nombre = $$data.entity.primer_nombre;
                $scope.$$entity.segundo_nombre = $$data.entity.segundo_nombre;
                $scope.$$entity.apellido_materno = $$data.entity.apellido_materno;
                $scope.$$entity.apellido_paterno = $$data.entity.apellido_paterno;
                $scope.$$entity.direccion = $$data.entity.direccion;
                $scope.$$entity.barrio = $$data.entity.barrio;
                $scope.$$entity.parroquia = $$data.entity.parroquia;
                $scope.$$entity.canton = $$data.entity.canton;
                $scope.$$entity.provincia = $$data.entity.provincia;
                $scope.$$entity.zona = $$data.entity.zona;
                $scope.$$entity.telefono = $$data.entity.telefono;
                $scope.$$entity.fecha_nacimiento = __toDate($$data.entity.fecha_nacimiento);
                $scope.$$entity.lugar_nacimiento = $$data.entity.lugar_nacimiento;
                $scope.$$entity.nacionalidad = $$data.entity.nacionalidad;
                $scope.$$entity.grupo_cultural = $$data.entity.grupo_cultural;
                $scope.$$entity.edad = $$data.entity.edad;
                $scope.$$entity.genero = $$data.entity.genero;
                $scope.$$entity.estado_civil = $$data.entity.estado_civil;
                $scope.$$entity.instruccion = $$data.entity.instruccion;
                $scope.$$entity.fecha_admision = __toDate($$data.entity.fecha_admision);
                $scope.$$entity.ocupacion = $$data.entity.ocupacion;
                $scope.$$entity.empresa_trabajo = $$data.entity.empresa_trabajo;
                $scope.$$entity.tipo_seguro_salud = $$data.entity.tipo_seguro_salud;
                $scope.$$entity.referido_de = $$data.entity.referido_de;
                $scope.$$entity.contacto_emergencia = $$data.entity.contacto_emergencia;
                $scope.$$entity.parentezco_contacto_emergencia = $$data.entity.parentezco_contacto_emergencia;
                $scope.$$entity.direccion_contacto_emergencia = $$data.entity.direccion_contacto_emergencia;
                $scope.$$entity.telefono_contacto_emergencia = $$data.entity.telefono_contacto_emergencia;
                $scope.$$entity.state = $$data.entity.state;
                $scope.$$entity.description = $$data.entity.description;
                $scope.$$entity.last_update_date = $$data.entity.last_update_date;
                $scope.$$entity.last_updater = $$data.entity.last_updater;
                if ($scope.$$entity.identificacion !== null) {
                    $scope.$$elements.identificacion.required = false;
                    $scope.$$layout.updateCanton(true);
                    $scope.$$elements.nuevo = false;
                    $scope.$$elements.is_passport = false;

                } else {
                    $scope.$$entity.fecha_admision = new Date();
                    $scope.$$elements.nuevo = true;
                }

                $scope.$$elements.nacionalidad.options = $$data.nacionality;
                $scope.$$elements.genero.options = $$data.gender;
                $scope.$$elements.grupo_cultural.options = $$data.cultural_group;
                $scope.$$elements.estado_civil.options = $$data.civil_state;
                $scope.$$elements.instruccion.options = $$data.instruction_level;
                $scope.$$elements.tipo_seguro_salud.options = $$data.insurance_type;
                $scope.$$elements.ocupacion.options = $$data.ocupation;
            };
        }]).controller("doctor_controller", ['$rootScope', '$scope', function ($rootScope, $scope) {

            $scope.$$operations = {
                process: {}
            };

            $scope.$$elements = {
                speciality_identifier: {
                    title: 'Especialidad',
                    required: true,
                    options: {}
                },
                identity_number: {
                    title: 'Identificación',
                    required: true,
                    maxlength: 10
                },
                first_name: {
                    title: 'Nombres',
                    required: true,
                    maxlength: 64
                },
                last_name: {
                    title: 'Apellidos',
                    required: true,
                    maxlength: 64
                },
                active: {
                    title: 'Activo',
                    tooltip: 'Indica si el usuario está activo o no'
                },
                description: {
                    title: 'Description',
                    required: false,
                    maxlength: 2048
                }
            };
            $scope.$$layout = {

            };
            $scope.$$entity = {
                identifier: null,
                speciality_identifier: null,
                identity_number: null,
                first_name: null,
                last_name: null,
                active: true,
                description: null
            };


            $scope.$$tinyEntity = {
                data: {
                    doctor: null
                },
                populate: function () {
                    this.data.doctor = $ng.copy($scope.$$entity);
                }
            };

            $scope.$$refreshLists = function () {
                $rootScope.$emit('$$refresh_query_list_form', $scope.$$operations.process.identifier);
            };

            $scope.$$initController = function ($$data) {
                $scope.$$operations = $$data.operations;
                $scope.$$entity.identifier = $$data.entity.identifier;
                $scope.$$entity.speciality_identifier = $$data.entity.speciality_identifier + "";
                $scope.$$entity.identity_number = $$data.entity.identity_number;
                $scope.$$entity.first_name = $$data.entity.first_name;
                $scope.$$entity.last_name = $$data.entity.last_name;
                $scope.$$entity.active = $$data.entity.active;
                $scope.$$entity.description = $$data.entity.description;

                $scope.$$elements.speciality_identifier.options = $$data.specialities;

                if ($scope.$$entity.identity_number !== null) {
                    $scope.$$elements.identity_number.required = false;
                }
            };
        }]);
});