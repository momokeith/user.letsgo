<?php
// Routes

$app->get('/users', function ($request, \Slim\Http\Response $response, $args) {
    $ret = $this->get('db')->query('SELECT * FROM users');
    return $response->withJson($ret->fetchAll());
});

$app->post('/users', function ($request, \Slim\Http\Response $response, $args) {
    $parsedBody = $request->getParsedBody();
    $sql = sprintf("INSERT INTO users (email) VALUES ('%s')",$parsedBody['email']);
    $this->get('db')->query($sql);

    return $response->withJson(["result"=>"created"]);
});

$app->delete('/users/{email}', function ($request, \Slim\Http\Response $response, $args) {
    $route = $request->getAttribute('route');
    $email = $route->getArgument('email');
    $sql = sprintf("DELETE FROM users WHERE email='%s'",$email);
    $this->get('db')->query($sql);

    return $response->withJson(["result"=>"deleted"]);
});
