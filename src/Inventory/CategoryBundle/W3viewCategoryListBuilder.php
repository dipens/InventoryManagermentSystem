<?php
namespace Inventory\CategoryBundle;

use Doctrine\ORM\EntityManager;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

use Symfony\Component\Translation\TranslatorInterface;

use Thrace\DataGridBundle\DataGrid\DataGridFactoryInterface;

class W3viewCategoryListBuilder
{

    const IDENTIFIER = 'W3viewCategoryList';

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
            ->setCaption('W3viewCategoryListBuilder')
            ->setColNames(array('id', 'CategoryName'))
            ->setColModel(array(array('name'=>'id', 'index'=>'o.id'),
                array('name'=>'CategoryName', 'index'=>'o.CategoryName'),
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
        $qb = $this->em->getRepository('EntityBundle:Category')->createQueryBuilder('o');
        $qb->select('o');
        return $qb;
    }
}
