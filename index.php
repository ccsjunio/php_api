<?php

define("_ROOTFOLDER", $_SERVER['DOCUMENT_ROOT']);
define("_URLBASE", $_SERVER['SERVER_NAME']);

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case '/':
        http_response_code(200);
        require __DIR__ . '/views/index.php';
        break;
    case '':
        http_response_code(200);
        require __DIR__ . '/views/index.php';
        break;
    case '/carlos_ferraz_output':
        http_response_code(200);
        require __DIR__ . '/views/carlos_ferraz_output.php';
        break;
    case 'http://' . $_SERVER['SERVER_NAME'] . '/carlos_ferraz_output':
        http_response_code(200);
        require __DIR__ . '/views/carlos_ferraz_output.php';
    case '/api/students':
        http_response_code(200);
        require __DIR__ . '/api/students.php';
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
