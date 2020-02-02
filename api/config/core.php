<?php
// show error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// home page url
$home_url = "http://api.localhost/api/";

// set number of records per page
$records_per_page = 5;

// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
