<?php


$url = $argv[1];
$result = [];
$scheme = parse_url($url, PHP_URL_SCHEME);
if ($scheme) {
    $result['scheme'] = $scheme;
}

$host = parse_url($url, PHP_URL_HOST);
if ($host) {
    $result['host'] = $host;
}

$path = parse_url($url, PHP_URL_PATH);
if ($path) {
    $result['path'] = $path;
}

$query = parse_url($url, PHP_URL_QUERY);
if ($query) {
    $result['query'] = $query;
}

$fragment = parse_url($url, PHP_URL_FRAGMENT);
if ($fragment) {
    $result['fragment'] = $fragment;
}
//$result['domain'];
//$result['subdomain'];
//$result['sld'];

