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
		//acces a la base infodb2
		$em = $this-> getDoctrine()-> getEntityManager();
		
		//recupération de tous les acteurs 
		$acteurs = $em->getRepository('ProjetProjetBundle:acteur')->findAll();
  		
		return $this->render('ProjetProjetBundle:Projet:attestation_scolarite.html.twig', array('acteurs' => $acteurs));
		
	}
	
	
}