<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the necessary files
require_once('vendor/autoload.php');

//Start a session
session_start();

// Create an instance of the Base class
$f3 = Base::instance();

// Create an instance of the controllers class
$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function() {
	global $con;
	$con->home();
});

//Run fat-free
$f3->run();