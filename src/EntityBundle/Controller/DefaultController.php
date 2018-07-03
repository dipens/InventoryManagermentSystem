<?php

namespace EntityBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
/*        $em = $this->container->get('doctrine.orm.entity_manager');
        $rsm = new ResultSetMapping();


        $query = $em->createNativeQuery('TestStoredProc @a = :a, @b = :b, @c = :c', $rsm);
        $query->setParameter('a', 'b');
        $query->setParameter('b', 'b');
        $query->setParameter('c', 'c');
        $result = $query->getArrayResult();
        var_dump($result);

        return $this->render('EntityBundle:Default:index.html.twig');


        $connection = $em->getConnection()->getWrappedConnection();
        $stmt = $connection->prepare('TestStoredProc @a= :a, @b= :b, @c= :c');
        $stmt->execute(array(
            'a'=> 'a',
            'b'=> 'b',
            'c'=> 'c',
        ));
        print_r($stmt->errorInfo());
        //$stmt->nextRowset();
        $result = $stmt->fetchAll();
        print_r($result);*/

        return $this->render('EntityBundle:Default:index.html.twig');
    }
}
