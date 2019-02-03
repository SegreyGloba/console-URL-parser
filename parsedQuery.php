<?php

include 'output.php';
$get_string = parse_url($url)['query'];
parse_str($get_string, $get_array);
