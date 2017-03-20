<?php

namespace Noel\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NoelWebBundle:Default:index.html.twig');
    }
}
