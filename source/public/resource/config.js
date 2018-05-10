/*
 * Developed by: Andres Sandoval Montoya
 * Date: 03/09/2015-9:59:51
 * Contact: andresandoval992@gmail.com
 *
 * config, part of app
 */

/* global require */

require.config({
    baseUrl: './resource',
    paths: {
        //
        // <editor-fold defaultstate="collapsed" desc="LIBS">
        'jquery': 'vendor/jquery-1.11.2/jquery.min',
        'jquery-ui': 'vendor/jquery-ui-1.11.3/jquery-ui.min',
        'jstree': 'vendor/vakata-jstree-9770c67/dist/jstree.min',
        'moment': 'vendor/momentJS-2.10.2/moment-with-locales.min',
        'md5': 'vendor/md5-1.0.1/md5.min',
        'alertify': 'vendor/alertifyjs-1.4.1/alertify',
        'ace': 'vendor/ace-1.2.0',
        'd3': 'vendor/d3-3.5.10/d3.min',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="ANGULAR">
        'angular': 'vendor/angular-1.4.7/angular',
        'angular-route': 'vendor/angular-1.4.7/angular-route',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="MODULES">
        'app-modules': 'src/js/modules/app-modules',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="FACTORIES">
        'alert-factory': 'src/js/factories/alert-factory',
        'http-factory': 'src/js/factories/http-factory',
        'validate-factory': 'src/js/factories/validate-factory',
        'perform-action-factory': 'src/js/factories/perform-action-factory',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="FILTERS">
        'angular-filter': 'vendor/angular-filter/angular.filter.min',
        'size-convertion-filter': 'src/js/filters/size-convertion-filter',
        'bold-match-filter': 'src/js/filters/bold-match-filter',
        'highlight-match-filter': 'src/js/filters/highlight-match-filter',
        'file-icon-filter': 'src/js/filters/file-icon-filter',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="DIRECTIVES">
        'compile-unsafe-html': 'src/js/directives/compile-unsafe-html',
        'context-menu': 'src/js/directives/context-menu',
        'only-numbers': 'src/js/directives/only-numbers',
        'right-click': 'src/js/directives/right-click',
        'on-scroll': 'src/js/directives/on-scroll',
        'ui-date': 'vendor/angular-ui/ui-date/date',
        'ui-select': 'vendor/angular-ui/ui-select/select.min',
        'file-model': 'src/js/directives/file-model',
        'mm-foundation': 'vendor/angular-foundation/mm-foundation-tpls-0.7.0',
        'loading-bar': 'vendor/angular-ui/angular-loading-bar/loading-bar',
        'js-tree': 'src/js/directives/js-tree',
        'current-time': 'src/js/directives/current-time',
        'wheel-click': 'src/js/directives/wheel-click',
        'perform-action': 'src/js/directives/perform-action',
        'angular-qr-core': 'vendor/angular-qr/lib/qrcode',
        'angular-qr': 'vendor/angular-qr/angular-qr.min',
        'ui-ace': 'vendor/angular-ui/ui-ace-0.2.3/ui-ace',
        'form-handler': 'src/js/directives/form-handler',
        'ui-tabs': 'src/js/directives/ui-tabs',
        'draggable': 'src/js/directives/draggable',
        'on-esc': 'src/js/directives/on-esc',
        'profile-action-tree': 'src/js/directives/profile-action-tree',
        'remove-dom': 'src/js/directives/remove-dom',
        'angular-timeline': 'vendor/angular-timeline/angular-timeline',
        'angular-charts': 'vendor/angular-charts-0.2.6/dist/angular-charts.min',
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="CONTROLLERS">
        //
        //// <editor-fold defaultstate="collapsed" desc="KERNEL CONTROLLERS">
        'index-controller': 'src/js/controllers/kernel/index-controller',
        'login-controller': 'src/js/controllers/kernel/login-controller',
        'home-controller': 'src/js/controllers/kernel/home-controller',
        'list-controller': 'src/js/controllers/kernel/list-controller',
        'action-controller': 'src/js/controllers/kernel/action-controller',
        'profile-controller': 'src/js/controllers/kernel/profile-controller',
        'user-controller': 'src/js/controllers/kernel/user-controller',
        'enterprise-controller': 'src/js/controllers/kernel/enterprise-controller',
        'department-controller': 'src/js/controllers/kernel/department-controller',
        'catalog-controller': 'src/js/controllers/kernel/catalog-controller',
        'db-backup-controller': 'src/js/controllers/kernel/db-backup-controller',
        //// </editor-fold>
        //
        //// <editor-fold defaultstate="collapsed" desc="APP CONTROLLERS">
        'patient-controller': 'src/js/controllers/app/patient-controller',
        'form-008-controller': 'src/js/controllers/app/form-008-controller',
        'form-008-tracing-controller': 'src/js/controllers/app/form-008-tracing-controller',
        'ambulance-use-controller': 'src/js/controllers/app/ambulance-use-controller',
        'oxygen-use-controller': 'src/js/controllers/app/oxygen-use-controller',
        'fur-controller': 'src/js/controllers/app/fur-controller',
        'expense-form-controller': 'src/js/controllers/app/expense-form-controller',
        'objection-controller': 'src/js/controllers/app/objection-controller',
        'generic-print-controller': 'src/js/controllers/app/generic-print-controller',
        'monthly-statistics-controller': 'src/js/controllers/app/monthly-statistics-controller',
        //// </editor-fold>
        //
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="BOOTSTRAP THE APP">
        'factories': 'src/js/factories/factories',
        'filters': 'src/js/filters/filters',
        'directives': 'src/js/directives/directives',
        'controllers': 'src/js/controllers/controllers',
        'ng-app': 'src/js/modules/app',
        'main': 'main'
                // </editor-fold>
    },
    shim: {
        // <editor-fold defaultstate="collapsed" desc="LIBS">

        'jquery': {
            exports: 'jquery'
        },
        'jquery-ui': {
            exports: 'jquery_ui',
            deps: ['jquery']
        },
        'jstree': {
            exports: 'jstree',
            deps: ['jquery']
        },
        'moment': {
            exports: 'moment'
        },
        'md5': {
            exports: 'md5'
        },
        'alertify': {
            exports: 'alertify'
        },
        'ace': {
            exports: 'ace'
        },
        'd3': {
            exports: 'd3'
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="ANGULAR">

        'angular': {
            exports: 'angular'
        },
        'angular-route': {
            exports: 'angular_route',
            deps: ['angular']
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="MODULES">

        'app-modules': {
            exports: 'app_modules',
            deps: ['angular']
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="FACTORIES">

        'alert-factory': {
            exports: 'alert_factory',
            deps: ['app-modules', 'alertify']
        },
        'http-factory': {
            exports: 'http_factory',
            deps: ['app-modules']
        },
        'validate-factory': {
            exports: 'validate_factory',
            deps: ['app-modules']
        },
        'perform-action-factory': {
            exports: 'perform_action_factory',
            deps: ['app-modules']
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="FILTERS">

        'angular-filter': {
            exports: 'angular_filter',
            deps: ['angular']
        },
        'size-convertion-filter': {
            exports: 'size_convertion_filter',
            deps: ['app-modules']
        },
        'bold-match-filter': {
            exports: 'bold_match_filter',
            deps: ['app-modules']
        },
        'highlight-match-filter': {
            exports: 'highlight_match_filter',
            deps: ['app-modules']
        },
        'file-icon-filter': {
            exports: 'file_icon_filter',
            deps: ['app-modules']
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="DIRECTIVES">

        'compile-unsafe-html': {
            exports: 'compile_unsafe_html',
            deps: ['app-modules']
        },
        'context-menu': {
            exports: 'context_menu',
            deps: ['app-modules']
        },
        'only-numbers': {
            exports: 'only_numbers',
            deps: ['app-modules']
        },
        'right-click': {
            exports: 'right_click',
            deps: ['app-modules']
        },
        'on-scroll': {
            exports: 'on_scroll',
            deps: ['app-modules']
        },
        'ui-date': {
            exports: 'ui_date',
            deps: ['angular', 'jquery', 'jquery-ui']
        },
        'ui-select': {
            exports: 'ui_select',
            deps: ['angular']
        },
        'file-model': {
            exports: 'file_model',
            deps: ['app-modules']
        },
        'mm-foundation': {
            exports: 'mm_foundation',
            deps: ['angular']
        },
        'loading-bar': {
            exports: 'loading_bar',
            deps: ['angular']
        },
        'js-tree': {
            exports: 'js_tree',
            deps: ['app-modules', 'jquery', 'jstree']
        },
        'current-time': {
            exports: 'current_time',
            deps: ['app-modules', 'moment']
        },
        'wheel-click': {
            exports: 'wheel_click',
            deps: ['app-modules']
        },
        'perform-action': {
            exports: 'perform_action',
            deps: ['app-modules']
        },
        'angular-qr-core': {
            exports: 'angular_qr_core',
            deps: ['angular']
        },
        'angular-qr': {
            exports: 'angular_qr',
            deps: ['angular-qr-core']
        },
        'ui-ace': {
            exports: 'ui_ace',
            deps: ['ace/ace', 'angular']
        },
        'form-handler': {
            exports: 'form_handler',
            deps: ['app-modules', 'md5']
        },
        'ui-tabs': {
            exports: 'ui_tabs',
            deps: ['app-modules']
        },
        'draggable': {
            exports: 'draggable',
            deps: ['app-modules']
        },
        'on-esc': {
            exports: 'on_esc',
            deps: ['app-modules']
        },
        'profile-action-tree': {
            exports: 'profile_action_tree',
            deps: ['app-modules']
        },
        'remove-dom': {
            exports: 'remove_dom',
            deps: ['app-modules']
        },
        'angular-timeline': {
            exports: 'angular_timeline',
            deps: ['angular']
        },
        'angular-charts': {
            exports: 'angular_charts',
            deps: ['angular', 'd3']
        },
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="CONTROLLERS">
        //
        //// <editor-fold defaultstate="collapsed" desc="KERNEL CONTROLLERS">

        'index-controller': {
            exports: 'index_controller',
            deps: ['app-modules']
        },
        'login-controller': {
            exports: 'login_controller',
            deps: ['app-modules']
        },
        'home-controller': {
            exports: 'home_controller',
            deps: ['app-modules']
        },
        'list-controller': {
            exports: 'list_controller',
            deps: ['app-modules']
        },
        'action-controller': {
            exports: 'action_controller',
            deps: ['app-modules']
        },
        'profile-controller': {
            exports: 'profile_controller',
            deps: ['app-modules']
        },
        'user-controller': {
            exports: 'user_controller',
            deps: ['app-modules']
        },
        'enterprise-controller': {
            exports: 'enterprise_controller',
            deps: ['app-modules']
        },
        'department-controller': {
            exports: 'department_controller',
            deps: ['app-modules']
        },
        'catalog-controller': {
            exports: 'catalog_controller',
            deps: ['app-modules']
        },
        'db-backup-controller': {
            exports: 'db_backup_controller',
            deps: ['app-modules']
        },
        //// </editor-fold>
        //
        //// <editor-fold defaultstate="collapsed" desc="APP CONTROLLERS">
        'patient-controller': {
            exports: 'patient_controller',
            deps: ['app-modules']
        },
        'form-008-controller': {
            exports: 'form_008_controller',
            deps: ['app-modules']
        },
        'form-008-tracing-controller': {
            exports: 'form_008_tracing_controller',
            deps: ['app-modules']
        },
        'ambulance-use-controller': {
            exports: 'ambulance_use_controller',
            deps: ['app-modules']
        },
        'oxygen-use-controller': {
            exports: 'oxygen_use_controller',
            deps: ['app-modules']
        },
        'fur-controller': {
            exports: 'fur_controller',
            deps: ['app-modules']
        },
        'expense-form-controller': {
            exports: 'expense_form_controller',
            deps: ['app-modules']
        },
        'objection-controller': {
            exports: 'objection_controller',
            deps: ['app-modules']
        },
        'generic-print-controller': {
            exports: 'generic_print_controller',
            deps: ['app-modules']
        },
        'monthly-statistics-controller': {
            exports: 'monthly_statistics_controller',
            deps: ['app-modules']
        },
        //// </editor-fold>
        //
        // </editor-fold>
        //
        // <editor-fold defaultstate="collapsed" desc="BOOTSTRAP THE APP">

        'factories': {
            exports: 'factories',
            deps: [
                'alert-factory',
                'http-factory',
                'validate-factory',
                'perform-action-factory'
            ]
        },
        'filters': {
            exports: 'filters',
            deps: [
                'angular-filter',
                'size-convertion-filter',
                'bold-match-filter',
                'highlight-match-filter',
                'file-icon-filter'
            ]
        },
        'directives': {
            exports: 'directives',
            deps: [
                'compile-unsafe-html',
                'context-menu',
                'only-numbers',
                'right-click',
                'on-scroll',
                'ui-date',
                'ui-select',
                'file-model',
                'mm-foundation',
                'loading-bar',
                'js-tree',
                'current-time',
                'wheel-click',
                'perform-action',
                'angular-qr',
                'ui-ace',
                'form-handler',
                'ui-tabs',
                'draggable',
                'on-esc',
                'profile-action-tree',
                'remove-dom',
                'angular-timeline',
                'angular-charts'
            ]
        },
        'controllers': {
            exports: 'controllers',
            deps: [
                //kernel controllers
                'index-controller',
                'login-controller',
                'home-controller',
                'action-controller',
                'profile-controller',
                'user-controller',
                'enterprise-controller',
                'department-controller',
                'catalog-controller',
                'db-backup-controller',
                //app controllers
                'patient-controller',
                'form-008-controller',
                'form-008-tracing-controller',
                'ambulance-use-controller',
                'oxygen-use-controller',
                'fur-controller',
                'expense-form-controller',
                'objection-controller',
                'generic-print-controller',
                'monthly-statistics-controller'
            ]
        },
        'ng-app': {
            exports: 'ng-app',
            deps: [
                'angular-route',
                'factories',
                'filters',
                'directives',
                'controllers'
            ]
        },
        'main': {
            exports: 'main',
            deps: ['ng-app']
        }

        // </editor-fold>

    }
});

//COMENTAR PARA COMPILAR
require(['main']);