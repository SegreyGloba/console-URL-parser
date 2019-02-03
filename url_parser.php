<?php
include 'output.php';
include 'parsedQuery.php';
gi

$parseHost = explode('.', str_replace('www.', '', $host));



$file = explode(PHP_EOL, file_get_contents('base.txt'));
$fileLower = array_map('strtolower', $file);

if (count($parseHost) == 2) {
    $result['domain'] = $parseHost[0] . '.' . $parseHost[1];
    $result['sld'] = $parseHost[1];
    $result['tld'] = end($parseHost);
}
elseif (count($parseHost) > 2){
    $sldLast = array_pop($parseHost);
    $sldFirst = array_pop($parseHost);
    $result['tld'] = $sldLast;

        if (in_array($sldFirst, $fileLower)) {
            $result['sld'] .= $sldFirst . '.';
        }
        else {
            $result['domain'] = $sldFirst . '.' . $sldLast;
        }

    if (in_array($sldLast, $fileLower)) {
        $result['sld'] .= $sldLast;
    }
$result['subdomain'] = str_replace($result['domain'],'', $result['host']);
//    for ($i = 0; $i < 2; $i++) {
//        $result = in_array($parseHost[$i], $fileLower);
//        if ($result == 1) {
//            $sld .= $parseHost[$i];
//        }
//        else {
//            $sld = NULL;
//        }
//    }
}



if ($result) {
    print_r($result);
}
else {
    echo 'Введите урл';
}




print_r($get_array);

