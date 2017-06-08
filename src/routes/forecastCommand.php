<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $result['callback'] = "success";
    $result['contextWrites']['http_resp'] = json_encode("ok");
    $result['contextWrites']['client_msg'] = json_encode("text");
    $result['contextWrites']['params'] = json_encode($request->params);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
