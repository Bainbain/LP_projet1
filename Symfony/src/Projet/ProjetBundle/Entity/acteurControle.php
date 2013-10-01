<?php
// src/Sdz/BlogBundle/Entity/acteurControle.php
 
namespace Projet\ProjetBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 */
class acteurControle
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\acteur")
   */
  private $acteur;
 
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\controle")
   */
  private $controle;
 
  /**
   * @ORM\Column()
   */
  private $ctrl_note; // Ici j'ai un attribut de relation « niveau »
 
  // … vous pouvez ajouter d'autres attributs bien entendu
}