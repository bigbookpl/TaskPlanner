<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TaskController extends Controller
{

    /**
     * @Route("/main")
     *
     */

   public function mainAction() {
        return $this->render('Task/main.html.twig');
}

}
