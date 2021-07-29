<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('about.php');
    }
}
