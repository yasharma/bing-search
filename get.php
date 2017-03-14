<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$url = 'https://www.bing.com/search?q=mackbook&first=11';
$html = file_get_contents($url);
echo $html;die;
