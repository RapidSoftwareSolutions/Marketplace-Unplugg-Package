<?php
$routes = [
    'getForecast',
    'forecastCommand',
    'metadata'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

