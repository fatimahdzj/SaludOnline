<?php

namespace bdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('bdBundle:Default:index.html.twig');
    }
}
