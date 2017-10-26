<?php
// Routes

$app->get('/users', function ($request, \Slim\Http\Response $response, $args) {
    $ret = $this->get('db')->query('SELECT * FROM users');
    return $response->withJson($ret->fetchAll());
});

$app->post('/users', function ($request, \Slim\Http\Response $response, $args) {
    $parsedBody = $request->getParsedBody();
    $sql = sprintf("INSERT INTO users (email) VALUES ('%s')",$parsedBody['email']);
    $ret = $this->get('db')->query($sql)->execute();

    return $response->withJson(["result"=>$ret]);
});
