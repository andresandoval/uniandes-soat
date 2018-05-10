({
    baseUrl: ".",
    mainConfigFile: "config.js",
    name: "main",
    out: "script.min.js",
    removeCombined: true,
    findNestedDependencies: true,
    preserveLicenseComments: false,
    include: 'vendor/requirejs-2.1.20/require',
//    uglify2: {
//        mangle: false
//    },
//    optimize: 'uglify2'
   optimize: 'none'
    //r.js.cmd -o compileJS.js
});