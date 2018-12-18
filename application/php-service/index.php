<?php

require_once('config/read_env.php');
require_once('vendor/autoload.php');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use mfacenet\Sample\Library as Library;

$library = new Library();
header('Content-Type: application/json');
echo json_encode(array("container_id" => $library->get_container_id()));