<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('login.php');
    }
}
