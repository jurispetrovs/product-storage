<?php

namespace App\Controllers;

class WelcomeController
{
    public function redirect()
    {
        header('Location: /product/list');
    }
}