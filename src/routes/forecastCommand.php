<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $result['callback'] = "success";

    $resp['http_resp'] = "ok";
    $resp['client_msg'] = "text";
    $resp['params'] = $request->params;

    $result['contextWrites'] = json_encode($resp);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
