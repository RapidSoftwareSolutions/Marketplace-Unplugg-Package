<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    print_r($request->getBody());
    return $response->withStatus(200);
});
