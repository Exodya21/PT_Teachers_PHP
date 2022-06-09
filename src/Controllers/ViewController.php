<?php
namespace App\Controllers;

use App\Models\Teacher;

class ViewController
{
    public function index() 
    {
        $teachers = (new Teacher())->all();
        require_once __DIR__ . "/../Views/landing.php";
    }
}
?>