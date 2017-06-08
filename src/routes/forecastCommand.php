<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $result['callback'] = "success";
    $result['contextWrites']['http_resp'] = "ok";
    $result['contextWrites']['client_msg'] = "text";
    $result['contextWrites']['params'] = $request->params;
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
