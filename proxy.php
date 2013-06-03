<?php
header('Content-type: text/html; charset=utf-8');
$sprit = urlencode($_GET['name']);
$url = 'http://systemetapi.se/product.json?name='. $sprit . '&order_by=price&max_price=700&order=ASC';
$string = file_get_contents($url);
echo $_GET['callback'] . $string;
?>