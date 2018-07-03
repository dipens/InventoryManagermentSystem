<?php

namespace Inventory\ItemMasterBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\Query\ResultSetMapping;
use EntityBundle\Entity\Item;
use EntityBundle\Entity\Products;
use EntityBundle\Entity\W3viewItems;
use Inventory\ItemMasterBundle\Form\ItemsType;
use Inventory\ItemMasterBundle\Form\OrdersReferencesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\DBAL\Logging\EchoSQLLogger;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $IPK)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $repo = $em->getRepository('EntityBundle:Products');
        $Products = $repo->findOneBy(array('id' => $IPK));
        if (!$Products) {
            throw new EntityNotFoundException();
        }
        $qb = $em->getRepository('EntityBundle:Category')->createQueryBuilder('u');
        $qb
            ->select('u')
        ;
        $result = $qb->getQuery()->getArrayResult();
        $CategoryArr = array();
        foreach($result as $key=>$value)
        {
            $CategoryArr[$value["CategoryName"]] = $value["id"];
        }
        //FORM CREATION HERE
        $label_attr = array
        (
            'CategoryArr' => $CategoryArr
        );

        //FORM CREATION HERE
        $form = $this->createForm(ItemsType::class, $Products, array(
            'label_attr' => $label_attr,
        ));

        if ($form->isValid()) {
            $this->saveForm($request, $Products, $em);
        }
        return $this->render('InventoryItemMasterBundle:Default:index.html.twig', array(
            'IPK' => $IPK,
            'form' => $form->createView(),
            'Item' => $Products,
        ));
    }

    public function saveForm(Request $request, Products $Products, $em)
    {
        $rsm = new ResultSetMapping();
        $em = $this->container->get('doctrine.orm.entity_manager');

        $Items_name = $request->get('Items_name');
        if(isset($Items_name))
        {
            $Products->setName($Items_name);
            $Products->setDateModified(new \DateTime());
        }

        $Items_SKU = $request->get('Items_SKU');
        if(isset($Items_SKU))
        {
            $Products->setSKU($Items_SKU);
            $Products->setDateModified(new \DateTime());
        }

        $Items_price = $request->get('Items_price');
        if(isset($Items_price))
        {
            $Products->setPrice($Items_price);
            $Products->setDateModified(new \DateTime());
        }

        $Items_quantity = $request->get('Items_quantity');
        if(isset($Items_quantity))
        {
            $Products->setQuantity($Items_quantity);
            $Products->setDateModified(new \DateTime());
        }

        $Items_categoryID = $request->get('Items_categoryID');
        if(isset($Items_categoryID))
        {
            $Products->setCategoryID($Items_categoryID);
            $Products->setDateModified(new \DateTime());
        }

        $em->persist($Products);
        $em->flush();
    }
    public function saveItemAjaxAction(Request $request, $IPK)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $repo = $em->getRepository('EntityBundle:Products');
        $Products = $repo->findOneBy(array('id' => $IPK));
        if (!$Products) {
            throw new EntityNotFoundException();
        }
        $this->saveForm($request, $Products, $em);
        return new JsonResponse(array('success' => 'success'));
    }
    public function deleteItemAction (Request $request, $IPK)
    {
        $rsm = new ResultSetMapping();
        $em = $this->container->get('doctrine.orm.entity_manager');

        $em = $this->container->get('doctrine.orm.entity_manager');
        $repo = $em->getRepository('EntityBundle:Products');
        $Products = $repo->findOneBy(array('id' => $IPK));
        if (!$Products) {
            throw new EntityNotFoundException();
        }
        $em->remove($Products);
        $em->flush();
        return new JsonResponse(array('success' => 'success'));
    }
    public function createItemAction (Request $request)
    {
        $rsm = new ResultSetMapping();
        $em = $this->container->get('doctrine.orm.entity_manager');

        $em = $this->container->get('doctrine.orm.entity_manager');
        $Products = new Products();
        $em->persist($Products);
        $em->flush();
        $IPK = $Products->getId();
        return $this->redirectToRoute('inventory_item_master_homepage', array('IPK' => $IPK));
    }

}
