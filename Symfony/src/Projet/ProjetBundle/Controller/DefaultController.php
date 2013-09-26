<?php

namespace Projet\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjetProjetBundle:Default:index.html.twig', array('name' => $name));
    }
}
