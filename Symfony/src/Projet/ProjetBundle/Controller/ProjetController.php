<?php

namespace Projet\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Projet\ProjetBundle\Entity\User;
use Projet\ProjetBundle\Form\UserType;

class ProjetController extends Controller
{
	public function getEM()
	{
		$em = $this->getDoctrine()->getManager();
		return $em;	
	}
	
	public function accueilAction()
	{
		return $this->render('ProjetProjetBundle:Projet:projet.html.twig');
	}
	
	public function scolariteAction($id)
	{
		$em = $this->getEm();
		$repository = $em->getRepository('ProjetProjetBundle:acteur'); 
		$acteur = $repository->find($id);
		$acteurs = $repository->findAll();
		$unites = $em->getRepository('ProjetProjetBundle:unite')->findAll();
		foreach($acteur->getFilieres() as $fil)
		{
		$filiere = $this->getDoctrine()->getManager()->getRepository('ProjetProjetBundle:filiere')->find($fil->getId());
		}
		$etudiants = array();
		foreach ($acteurs as $a )	
		{
			foreach($a->getFilieres() as $aFil)
			{
				if($aFil->getId() == $filiere->getId() && $a != $acteur)
				{
					$etudiants[] = $a;
				}
			}
		}		
		
		
  		//je renvoi bien l'acteur qui c'est connecter, je renvoi la liste d'etudiant associe
		return $this->render('ProjetProjetBundle:Projet:attestation_scolarite.html.twig', array('etudiants' => $etudiants, 'filiere' => $filiere, 'acteur' => $acteur, 'unites' => $unites));	
	}
		
	public function connexionAction()
	{
		$connect = new User();
		$form = $this->createForm(new UserType, $connect);
		$request = $this->get('request');
		$em = $this->getDoctrine()->getManager();
		$users = $em->getRepository('ProjetProjetBundle:User')->findAll();
		$acteurs = $em->getRepository('ProjetProjetBundle:acteur')->findAll();
		if($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if($form->isValid())
			{
				for($i = 0; $i < count($users); $i++)
				{
					if($users[$i]->getLogin() == $connect->getLogin())
					{
						if($users[$i]->getPassword() == $connect->getPassword())
						{
							$acteur = $users[$i]->getActeur();
							return $this->redirect($this->generateUrl('projet_projet_attestation_scolarite', array('id' => $acteur->getId())));	
						}	
					}	
				}
			}	
		}
		return $this->render('ProjetProjetBundle:Projet:connexion.html.twig', array('form' => $form->createView()));	
	}
}