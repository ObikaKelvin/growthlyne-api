<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('contact.php');
    }
}
