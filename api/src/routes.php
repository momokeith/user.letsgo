<?php
// Routes

$app->get('/users', function ($request, \Slim\Http\Response $response, $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");

    $response->getBody()->write([1,'Mr','Keita']);
    return $response;
    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
});
