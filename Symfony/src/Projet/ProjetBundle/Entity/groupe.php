<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\groupeRepository")
 */
class groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_code", type="string", length=255)
     */
    private $grpCode;

    /**
     * @var string
     *
     * @ORM\Column(name="grp_lib", type="string", length=255)
     */
    private $grpLib;

	
	/**
     * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\filiere")
     * @ORM\JoinColumn(nullable=false)
     */
  	private $filiere;
	
	/**
     * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\groupe")
     * @ORM\JoinColumn(nullable=false)
     */
  	private $grp_pere;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grpCode
     *
     * @param string $grpCode
     * @return groupe
     */
    public function setGrpCode($grpCode)
    {
        $this->grpCode = $grpCode;
    
        return $this;
    }

    /**
     * Get grpCode
     *
     * @return string 
     */
    public function getGrpCode()
    {
        return $this->grpCode;
    }

    /**
     * Set grpLib
     *
     * @param string $grpLib
     * @return groupe
     */
    public function setGrpLib($grpLib)
    {
        $this->grpLib = $grpLib;
    
        return $this;
    }

    /**
     * Get grpLib
     *
     * @return string 
     */
    public function getGrpLib()
    {
        return $this->grpLib;
    }

    /**
     * Set filId
     *
     * @param integer $filId
     * @return groupe
     */
    public function setFilId($filId)
    {
        $this->filId = $filId;
    
        return $this;
    }

    /**
     * Get filId
     *
     * @return integer 
     */
    public function getFilId()
    {
        return $this->filId;
    }

    /**
     * Set grpPere
     *
     * @param integer $grpPere
     * @return groupe
     */
    public function setGrpPere($grpPere)
    {
        $this->grpPere = $grpPere;
    
        return $this;
    }

    /**
     * Get grpPere
     *
     * @return integer 
     */
    public function getGrpPere()
    {
        return $this->grpPere;
    }

    /**
     * Set filiere
     *
     * @param \Projet\ProjetBundle\Entity\filiere $filiere
     * @return groupe
     */
    public function setFiliere(\Projet\ProjetBundle\Entity\filiere $filiere)
    {
        $this->filiere = $filiere;
    
        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Projet\ProjetBundle\Entity\filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
}