<?php

namespace App\AlipayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppAlipayBundle:Default:index.html.twig');
    }
}
