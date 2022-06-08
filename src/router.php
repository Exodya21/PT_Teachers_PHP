<?php
namespace App;

use App\Controllers\ViewController;

$uri = $_SERVER["REQUEST_URI"];
$controller = new ViewController();
// echo($uri);

if ($uri == '/')
{
    // if($_POST)
    // { 
    //     $controller->store($_POST); 
    // }
    $controller -> index();
}