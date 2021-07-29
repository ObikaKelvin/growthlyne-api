<?php

namespace App\Controllers;

class Checkout extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('checkout.php');
    }
}
