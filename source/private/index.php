<?php

/*
 * Developed by: Andres Sandoval Montoya
 * Date: 07/09/2015-8:58:55
 * Contact: andresandoval992@gmail.com
 *
 * index, part of app
 */

\ini_set("display_errors", true);
require_once './config.php';
require_once './router/appRouter.php';

use app\router;

\date_default_timezone_set("America/Guayaquil");
$router = new router\appRouter();
$router->go();
unset($router);
?>