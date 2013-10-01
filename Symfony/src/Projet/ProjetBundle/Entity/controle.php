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
     * @var integer
     *
     * @ORM\Column(name="ens_id", type="integer")
     */
    private $ensId;

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
}