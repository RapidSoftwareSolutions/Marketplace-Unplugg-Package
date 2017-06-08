<?php
$app->post('/api/Unplugg/forecastCommand', function ($request, $response) {

    $data = $request->getBody();

    function normalizeJson($jsonObject)
    {
        return preg_replace_callback('~"([\[{].*?[}\]])"~s', function ($match) {
            return preg_replace('~\s*"\s*~', "\"", $match[1]);
        }, $jsonObject);
    }

    $data = json_decode(normalizeJson($data));

    $result['contextWrites']['to']['http_resp'] = "ok";
    $result['contextWrites']['to']['client_msg'] = $data->body;
    $result['contextWrites']['to']['params']['token'] = $data->params->token;
    $result['contextWrites']['to'] = json_encode($result['contextWrites']['to']);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});
