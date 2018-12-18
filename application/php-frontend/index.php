<?php

require_once 'vendor/autoload.php';
// Initialize Twig for Templates
$loader = new Twig_Loader_Filesystem('templates/');
$twig = new Twig_Environment($loader);

//Use requests to get data
$url = sprintf('http://%s/', $_ENV['API_ENDPOINT']);
$header = array('Accept' => 'application/json');
$request = \Requests::get($url, $header);

if ($request->status_code != 200) {
    echo $twig->render(
        'error/error.html',
        array(
            'error' => 'Unknown Error with API Request',
            'data' => var_export($request, true)
        )
    );
    exit();
}
$data = json_decode($request->body,true);

echo $twig->render('index/index.html', array('output' => $data));


