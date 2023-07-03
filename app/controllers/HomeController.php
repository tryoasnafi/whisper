<?php

class HomeController
{
    public function index()
    {
        // render the view
        require_once __DIR__ . '/../views/home.php';
    }
}