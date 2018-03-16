<?php

/**
 * Created Services that are critical to our application.
 *
 */

container()->bind('Router', function() {
    return new Router\Router(rootDir().'/App/Routes.php');
});

container()->bind('Request', function() {
    return new Request\Request();
});
container()->bind('Compiler', function() {
    return new Kernel\Compiler\Compiler();
});

container()->bind('Dotenv', function() {
    return new Dotenv\Dotenv(__DIR__.'/../');
});
