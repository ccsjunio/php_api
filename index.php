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
        break;
    case '/api/product/list/all':
        if ($method !== "GET") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }
        http_response_code(200);
        require __DIR__ . '/api/product/read.php';
        break;
    case (preg_match('/\/api\/product\/list\/\d+/m', $request) ? true : false):
        if ($method !== "GET") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }
        preg_match_all('/\/api\/product\/list\/\d+/m', $request, $matches, PREG_SET_ORDER, 0);
        $requestExploded = explode("/", $matches[0][0]);
        $id = $requestExploded[count($requestExploded) - 1];
        http_response_code(200);
        require __DIR__ . '/api/product/read_one.php';
        break;

    case (preg_match('/\/api\/product\/search\/[0-9][a-z][A-Z]+/m', $request) ? true : false):
        if ($method !== "GET") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }
        preg_match_all('/\/api\/product\/search\/[0-9][a-z][A-Z]+/m', $request, $matches, PREG_SET_ORDER, 0);
        $requestExploded = explode("/", $matches[0][0]);
        $searchString = $requestExploded[count($requestExploded) - 1];
        http_response_code(200);
        require __DIR__ . '/api/product/search.php';
        break;

    case (preg_match('/\/api\/[1-9]+/m', $request) ? true : false):
        if ($method !== "GET") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }
        preg_match_all('/\/api\/product\/[1-9]+/m', $request, $matches, PREG_SET_ORDER, 0);
        $requestExploded = explode("/", $matches[0][0]);
        $page = $requestExploded[count($requestExploded) - 1];
        http_response_code(200);
        require __DIR__ . '/api/product/read_paging.php';
        break;

    case '/api/product/create':
        if ($method !== "POST") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }

        http_response_code(200);
        require __DIR__ . '/api/product/create.php';
        break;
    case '/api/product/update':
        if ($method !== "PUT") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }

        http_response_code(200);
        require __DIR__ . '/api/product/update.php';
        break;
    case '/api/product/delete':
        if ($method !== "DELETE") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }

        http_response_code(200);
        require __DIR__ . '/api/product/delete.php';
        break;

        // Categories
    case '/api/category/list/all':
        if ($method !== "GET") {
            http_response_code(405);
            require __DIR__ . '/views/405.php';
            break;
        }
        http_response_code(200);
        require __DIR__ . '/api/category/read.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
