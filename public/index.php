<?php

$loader = require '../vendor/autoload.php';
$conf_path = '../Config/configs.php';

 if (file_exists($conf_path)) {
     $app = new \Litovka\Framework\Application( include(dirname(__FILE__) .'/' . $conf_path) );
 }