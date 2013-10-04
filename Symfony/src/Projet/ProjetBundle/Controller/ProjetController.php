<?php

namespace Projet\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProjetController extends Controller
{
	public function accueilAction()
	{
		return $this->render('ProjetProjetBundle:Projet:projet.html.twig');
		
	}
	
	public function scolariteAction()
	{
		$repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ProjetProjetBundle:acteur');
 
		$acteurs = $repository->findAll();
  		
		return $this->render('ProjetProjetBundle:Projet:attestation_scolarite.html.twig', array('acteurs' => $acteurs));
		
	}
	
	
}