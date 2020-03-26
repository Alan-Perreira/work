<?php

namespace App\Controller;

use ADRIJ\AbstractController;

class Home extends AbstractController
{
  public function print()
 {
     return $this->render('home');
 }
}
