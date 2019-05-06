<?php
// Practice routing

// Start a session
session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once('vendor/autoload.php');
require('classes/pet.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);


// Define a default route
$f3->route('GET /', function($f3){
    // Instantiate the Pet class
    $pet1 = new Pet();
    $f3->set('pet1', $pet1);

   // Display view
    $template = new Template();
    echo $template->render('views/my-pets.html');
});


// Run Fat-free
$f3->run();
