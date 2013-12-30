<?php

namespace ProgrammingMoris\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'a';
        return $this->render('ProgrammingMorisHomeBundle:Default:index.html.twig', array('name' => 'exemplo'));
    }
}
