<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Phalcon\Mvc\Micro;

/*require __DIR__ . '/../bootstrap/app.php';

require __DIR__ . '/../src/Api/routes.php';*/

$app = new Micro();

$app->get(
    "/api",
    function () {
        echo json_encode(['value' => 'resposta']);
    }
);

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();
