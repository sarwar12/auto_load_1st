<?php 
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
$cities = ['feni, dhaka, dinajpur, barishal'];
foreach ($cities as $city) {
	Capsule::table('cities')->insert([
		'name' =>$city
	]);
}