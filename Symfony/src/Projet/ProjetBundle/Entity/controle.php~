<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * controle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\controleRepository")
 */
class controle
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
     * @var \DateTime
     *
     * @ORM\Column(name="ctrl_dt", type="datetime")
     */
    private $ctrlDt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctrl_coef", type="integer")
     */
    private $ctrlCoef;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ctrl_titre", type="string", length=255)
     */
    private $ctrl_titre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ctrl_detail", type="string", length=255)
     */
    private $ctrl_detail;

	/**
	 * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\enseignement")
     * @ORM\JoinColumn(nullable=false)
     */
	private $enseignement;


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
     * Set ctrlDt
     *
     * @param \DateTime $ctrlDt
     * @return controle
     */
    public function setCtrlDt($ctrlDt)
    {
        $this->ctrlDt = $ctrlDt;
    
        return $this;
    }

    /**
     * Get ctrlDt
     *
     * @return \DateTime 
     */
    public function getCtrlDt()
    {
        return $this->ctrlDt;
    }

    /**
     * Set ctrlCoef
     *
     * @param integer $ctrlCoef
     * @return controle
     */
    public function setCtrlCoef($ctrlCoef)
    {
        $this->ctrlCoef = $ctrlCoef;
    
        return $this;
    }

    /**
     * Get ctrlCoef
     *
     * @return integer 
     */
    public function getCtrlCoef()
    {
        return $this->ctrlCoef;
    }

    /**
     * Set ensId
     *
     * @param integer $ensId
     * @return controle
     */
    public function setEnsId($ensId)
    {
        $this->ensId = $ensId;
    
        return $this;
    }

    /**
     * Get ensId
     *
     * @return integer 
     */
    public function getEnsId()
    {
        return $this->ensId;
    }

    /**
     * Set enseignement
     *
     * @param \Projet\ProjetBundle\Entity\enseignement $enseignement
     * @return controle
     */
    public function setEnseignement(\Projet\ProjetBundle\Entity\enseignement $enseignement)
    {
        $this->enseignement = $enseignement;
    
        return $this;
    }

    /**
     * Get enseignement
     *
     * @return \Projet\ProjetBundle\Entity\enseignement 
     */
    public function getEnseignement()
    {
        return $this->enseignement;
    }

    /**
     * Set ctrl_titre
     *
     * @param string $ctrlTitre
     * @return controle
     */
    public function setCtrlTitre($ctrlTitre)
    {
        $this->ctrl_titre = $ctrlTitre;
    
        return $this;
    }

    /**
     * Get ctrl_titre
     *
     * @return string 
     */
    public function getCtrlTitre()
    {
        return $this->ctrl_titre;
    }

    /**
     * Set ctrl_detail
     *
     * @param string $ctrlDetail
     * @return controle
     */
    public function setCtrlDetail($ctrlDetail)
    {
        $this->ctrl_detail = $ctrlDetail;
    
        return $this;
    }

    /**
     * Get ctrl_detail
     *
     * @return string 
     */
    public function getCtrlDetail()
    {
        return $this->ctrl_detail;
    }
}