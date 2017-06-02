<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    return $response->withStatus(200)->write($request->getBody());
});
