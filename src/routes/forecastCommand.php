<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    $result['callback'] = 'success';
    $result['contextWrites']['to']['http_resp'] = "";
    $result['contextWrites']['to']['client_msg'] = array('message' => 'Hello World');
    $result['contextWrites']['to']['params'] = ["param1"=>"value1", "param2"=>"value2"];
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
