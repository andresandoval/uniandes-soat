define(['angular'], function ($ng) {
    var $$directives = $ng.module('kernel-directive', []);
    var $$factories = $ng.module('kernel-factory', []);
    var $$filters = $ng.module('kernel-filter', []);
    var $$kernel = $ng.module('kernel', []);

    return {
        $$directives: $$directives,
        $$factories: $$factories,
        $$filters: $$filters,
        $$kernel: $$kernel
    };
});