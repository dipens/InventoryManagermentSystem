<?php
namespace Inventory\RegularInventoryBundle;

use Doctrine\ORM\EntityManager;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

use Symfony\Component\Translation\TranslatorInterface;

use Thrace\DataGridBundle\DataGrid\DataGridFactoryInterface;

class W3viewItemsListBuilder
{

    const IDENTIFIER = 'W3viewItemsList';

    protected $factory;

    protected $translator;

    protected $router;

    protected $em;

    protected $request;

    public function __construct (DataGridFactoryInterface $factory, TranslatorInterface $translator, RouterInterface $router,
                                 EntityManager $em, RequestStack $request_stack)
    {
        $this->factory = $factory;
        $this->translator = $translator;
        $this->router = $router;
        $this->em = $em;
        $this->request = $request_stack->getCurrentRequest();
    }

    public function build ()
    {

        $dataGrid = $this->factory->createDataGrid(self::IDENTIFIER);
        $dataGrid
            ->setCaption('W3viewItemsList')
            ->setColNames(array('id', 'name', 'categoryID', 'SKU', 'price', 'quantity', 'dateCreated', 'dateModified'))
            ->setColModel(array(array('name'=>'id', 'index'=>'o.id'),
                array('name'=>'name', 'index'=>'o.name'),
                array('name'=>'categoryID', 'index'=>'o.categoryID'),
                array('name'=>'SKU', 'index'=>'o.SKU'),
                array('name'=>'price', 'index'=>'o.price'),
                array('name'=>'quantity', 'index'=>'o.quantity'),
                array('name'=>'dateCreated', 'index'=>'o.dateCreated'),
                array('name'=>'dateModified', 'index'=>'o.dateModified'),
            ))
            ->setQueryBuilder($this->getQueryBuilder())
            ->enableSearchButton(true)
            //->setAsDependentGrid(true)
            //->setDependentDataGrids(array())
        ;

        return $dataGrid;
    }

    protected function getQueryBuilder()
    {
        $qb = $this->em->getRepository('EntityBundle:Products')->createQueryBuilder('o');
        $qb->select('o');
        return $qb;
    }
}
