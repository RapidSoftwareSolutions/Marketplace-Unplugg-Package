<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    $body = $request->getBody();
    $result['contextWrites']['to']['http_resp'] = "ok";
    $result['contextWrites']['to']['client_msg'] = $body['body'];
    $result['contextWrites']['to']['params']['token'] = $body['params']['token'];
    $result['contextWrites']['to'] = json_encode($result['contextWrites']['to']);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
