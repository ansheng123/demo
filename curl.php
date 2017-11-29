<?php
header('Content-type:text/html; charset=UTF-8');
error_reporting(E_ALL &~E_WARNING &~E_NOTICE);


$obj = curl_init();

$options = array(
            CURLOPT_URL => "http://www.baidu.com",
                    CURLOPT_RETURNTRANSFER => true);

curl_setopt_array($obj, $options);

$output = curl_exec($obj);

curl_close($url);

echo str_replace("百度", "屌丝", $output);

date_default_timezone_set('PRC');
echo 'git clone success';
echo 'ooo';
