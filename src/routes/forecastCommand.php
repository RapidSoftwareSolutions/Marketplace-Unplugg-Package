<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    $result['contextWrites']['to']['http_resp'] = "";
    $result['contextWrites']['to']['client_msg'] = ['message' => 'Hello World'];
    $result['contextWrites']['to']['http_resp'] = ["param1"=>"value1"];
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
