<?php
 class Controller
 {
    protected function view ($path, $data = [])
    {
        extract($data);
        require_once "../app/views/{$path}.php";
    }
 }