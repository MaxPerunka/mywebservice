<?php
header('Access-Control-Allow-Origin:*');

$data = array (
    "message" => "Hello from PHP server",
    "origin" => "http://localhost"
);

print json_encode($data,JSON_PRETTY_PRINT);