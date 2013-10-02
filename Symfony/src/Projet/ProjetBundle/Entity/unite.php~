<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * unite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\uniteRepository")
 */
class unite
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
     * @ORM\Column(name="unite_code", type="string", length=255)
     */
    private $uniteCode;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_lib", type="string", length=255)
     */
    private $uniteLib;

    /**
     * @var integer
     *
     * @ORM\Column(name="unite_coef", type="integer")
     */
    private $uniteCoef;

    /**
     * @var integer
     *
     * @ORM\Column(name="unite_ects", type="integer")
     */
    private $uniteEcts;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\filiere")
     * @ORM\JoinColumn(nullable=false)
     */
	private $filiere;


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
     * Set uniteCode
     *
     * @param string $uniteCode
     * @return unite
     */
    public function setUniteCode($uniteCode)
    {
        $this->uniteCode = $uniteCode;
    
        return $this;
    }

    /**
     * Get uniteCode
     *
     * @return string 
     */
    public function getUniteCode()
    {
        return $this->uniteCode;
    }

    /**
     * Set uniteLib
     *
     * @param string $uniteLib
     * @return unite
     */
    public function setUniteLib($uniteLib)
    {
        $this->uniteLib = $uniteLib;
    
        return $this;
    }

    /**
     * Get uniteLib
     *
     * @return string 
     */
    public function getUniteLib()
    {
        return $this->uniteLib;
    }

    /**
     * Set uniteCoef
     *
     * @param integer $uniteCoef
     * @return unite
     */
    public function setUniteCoef($uniteCoef)
    {
        $this->uniteCoef = $uniteCoef;
    
        return $this;
    }

    /**
     * Get uniteCoef
     *
     * @return integer 
     */
    public function getUniteCoef()
    {
        return $this->uniteCoef;
    }

    /**
     * Set uniteEcts
     *
     * @param integer $uniteEcts
     * @return unite
     */
    public function setUniteEcts($uniteEcts)
    {
        $this->uniteEcts = $uniteEcts;
    
        return $this;
    }

    /**
     * Get uniteEcts
     *
     * @return integer 
     */
    public function getUniteEcts()
    {
        return $this->uniteEcts;
    }

    /**
     * Set filId
     *
     * @param integer $filId
     * @return unite
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
     * Set unite
     *
     * @param \Projet\ProjetBundle\Entity\filiere $unite
     * @return unite
     */
    public function setUnite(\Projet\ProjetBundle\Entity\filiere $unite)
    {
        $this->unite = $unite;
    
        return $this;
    }

    /**
     * Get unite
     *
     * @return \Projet\ProjetBundle\Entity\filiere 
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set filiere
     *
     * @param \Projet\ProjetBundle\Entity\filiere $filiere
     * @return unite
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