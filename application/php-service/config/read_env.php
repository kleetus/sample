<?php

function get_config(array $defaults = array())
{
    $config = array();
    foreach ($defaults as $key => $value) {
        $config[$key] = isset($_ENV['key']) ? $_ENV['key'] : $value;
    }
    return $config;
}
$default_config = array(
    'is_dev' =>  true,

);

$config = get_config($default_config);



