<?php

namespace Mtc\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ShopController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MtcShopBundle:shop:index.html.twig');
    }
}
