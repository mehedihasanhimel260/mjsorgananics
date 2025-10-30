<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance mode via the "down" command we'll
| load this file and then return a response which shows the user a
| simple "maintenance" message. Otherwise, we'll load the proper
| application.
|
*/

if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| We support custom PHP autoloading using Composer. As a result, we'll
| load the Composer auto-load file so that we don't have to worry
| about loading any of our classes manually.
|
*/

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel's "handle" method, then send the response
| back to the client's browser.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

$app->make(Kernel::class)->handle(Request::capture())->send();
