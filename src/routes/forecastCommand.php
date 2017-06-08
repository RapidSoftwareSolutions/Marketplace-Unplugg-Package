<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    $params =  $request->getParsedBody();
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($params);
});
