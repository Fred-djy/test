<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('app_alipay_homepage', new Route('/', array(
    '_controller' => 'AppAlipayBundle:Default:index',
)));

return $collection;
