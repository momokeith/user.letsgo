<?php
// Routes

$app->get('/users', function ($request, \Slim\Http\Response $response, $args) {
    $ret = $this->get('db')->query('SELECT * FROM user');
    var_dump($ret->fetch());
    exit;
    return $response->withJson([1,'Mr','Mohamed Naman']);
});
