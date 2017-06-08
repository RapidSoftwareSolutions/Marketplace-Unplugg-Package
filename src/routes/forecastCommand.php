<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $body = $request->getParsedBody();

    $result['callback'] = "success";
    $resp['http_resp'] = "ok";
    $resp['client_msg'] = "text";
    $resp['params'] = $body['params'];

    $result['contextWrites'] = $resp;
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
