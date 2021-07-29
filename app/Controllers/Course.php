<?php

namespace App\Controllers;

class Course extends BaseController
{
	public function index ()
    {        
		return $this->twig->render('course.php');
    }
}
