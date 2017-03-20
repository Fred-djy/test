<?php

namespace Caishe\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CaisheBundle:Default:index.html.twig');
    }
}
