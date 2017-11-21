<?php 
require 'vendor/autoload.php';
$city = City::find(3);
$city->delete();