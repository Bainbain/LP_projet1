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
  private $ctrl_note; // Ici j'ai un attribut de relation « notes »
 
  // … vous pouvez ajouter d'autres attributs bien entendu

    /**
     * Set ctrl_note
     *
     * @param string $ctrlNote
     * @return acteurControle
     */
    public function setCtrlNote($ctrlNote)
    {
        $this->ctrl_note = $ctrlNote;
    
        return $this;
    }

    /**
     * Get ctrl_note
     *
     * @return string 
     */
    public function getCtrlNote()
    {
        return $this->ctrl_note;
    }

    /**
     * Set acteur
     *
     * @param \Projet\ProjetBundle\Entity\acteur $acteur
     * @return acteurControle
     */
    public function setActeur(\Projet\ProjetBundle\Entity\acteur $acteur)
    {
        $this->acteur = $acteur;
    
        return $this;
    }

    /**
     * Get acteur
     *
     * @return \Projet\ProjetBundle\Entity\acteur 
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set controle
     *
     * @param \Projet\ProjetBundle\Entity\controle $controle
     * @return acteurControle
     */
    public function setControle(\Projet\ProjetBundle\Entity\controle $controle)
    {
        $this->controle = $controle;
    
        return $this;
    }

    /**
     * Get controle
     *
     * @return \Projet\ProjetBundle\Entity\controle 
     */
    public function getControle()
    {
        return $this->controle;
    }
}