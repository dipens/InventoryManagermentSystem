<?php

namespace Inventory\RegularInventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventoryRegularInventoryBundle:Default:index.html.twig', array('itemType' => 'Regular'));
    }
}
