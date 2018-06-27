<?php

defined('DEFAULT_PHONE')||define('DEFAULT_PHONE','0937472503');
defined('LIMIT_PAGE')||define('LIMIT_PAGE', 5);
defined('BASE_IMG')||define('BASE_IMG', $_SERVER['DOCUMENT_ROOT']."/public/upload/images/");
defined('URL_IMG')||define('URL_IMG', "/public/upload/images/");
defined('NORMAL_PRICE')||define('NORMAL_PRICE', 1);
defined('CONTACT_PRICE')||define('CONTACT_PRICE', 2);
defined('EMPTY_PRODUCT')||define('EMPTY_PRODUCT', 3);
defined('CONTACT_PHONE')||define('CONTACT_PHONE', "0937472503");
defined('CONTACT_PHONE2')||define('CONTACT_PHONE2', "0935355527");


/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
