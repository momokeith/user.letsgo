<?php
// Routes

$app->get('/users', function ($request, \Slim\Http\Response $response, $args) {
    return $response->withJson([1,'Mr','Mohamed Keith']);
});
