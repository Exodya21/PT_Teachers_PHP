<?php
namespace App\Controllers;

class ViewController
{
    public function index() 
    {
        require_once __DIR__ . "/../Views/landing.php";
    }
}
?>