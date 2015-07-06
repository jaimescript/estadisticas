<?php

namespace Jaime\estadisticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JaimeestadisticaBundle:Default:index.html.twig', array('name' => $name));
    }
    public function loginAction()
    {
        return $this->render('JaimeestadisticaBundle:Default:Login.html.twig');
    }
}
