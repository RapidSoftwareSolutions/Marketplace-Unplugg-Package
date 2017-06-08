<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    $result['contextWrites']['to']['http_resp'] = "resp content";
    $result['contextWrites']['to']['client_msg'] = ['message' => 'Hello World'];
    $result['contextWrites']['to']['params'] = ["param1"=>"value1"];
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
