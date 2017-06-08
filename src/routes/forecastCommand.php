<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $body = $request->getParsedBody();

    $result['contextWrites']['to']['http_resp'] = "ok";
    $result['contextWrites']['to']['client_msg'] = "text";
    $result['contextWrites']['to']['params'] = $body['params'];
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
