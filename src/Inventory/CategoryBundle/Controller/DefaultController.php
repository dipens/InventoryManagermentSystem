<?php

namespace Inventory\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventoryCategoryBundle:Default:index.html.twig');
    }
}
