<?php
    session_start();
    require '../vendor/autoload.php';
    use Slim\Factory\AppFactory;

    $app = AppFactory::create();

    require '../src/helpers/config.php';
    require '../src/routes/site.php';

    $app->run();

?>