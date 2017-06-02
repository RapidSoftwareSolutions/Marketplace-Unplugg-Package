<?php

$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {
    echo $request->getBody();
});
