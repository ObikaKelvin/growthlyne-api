<?php

namespace App\Controllers;

class Legal extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('legal.php');
    }
}
