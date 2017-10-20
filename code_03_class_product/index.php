<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";

$db = new Conn("mysql:host=mysql857.umbler.com:41890;dbname=phpoo_course_son","teste_pro_oo","teste123456");
$product = new Product($db);

$list = $product->list();

var_dump($list);