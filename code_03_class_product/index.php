<?php

require_once "Product.php";

$db = new PDO("mysql:host=mysql857.umbler.com:41890;dbname=phpoo_course_son","teste_pro_oo","teste123456");

$product = new Product($db);

$list = $product->list();

var_dump($list);