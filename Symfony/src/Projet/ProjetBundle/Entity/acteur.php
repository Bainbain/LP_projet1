<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * acteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\acteurRepository")
 */
class acteur
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="civ_act", type="string", length=255)
     */
    private $civAct;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_act", type="string", length=255)
     */
    private $nomAct;

    /**
     * @var string
     *
     * @ORM\Column(name="prn_act", type="string", length=255)
     */
    private $prnAct;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_act", type="string", length=15)
     */
    private $telAct;

    /**
     * @var string
     *
     * @ORM\Column(name="mel1_act", type="string", length=255)
     */
    private $mel1Act;

    /**
     * @var string
     *
     * @ORM\Column(name="mel2_act", type="string", length=255)
     */
    private $mel2Act;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_act", type="string", length=15)
     */
    private $mobileAct;

    /**
     * @var string
     *
     * @ORM\Column(name="adr_act", type="string", length=255)
     */
    private $adrAct;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_act", type="string", length=255)
     */
    private $villeAct;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_act", type="string", length=10)
     */
    private $cpAct;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_act", type="string", length=255)
     */
    private $paysAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="alt_id", type="integer")
     */
    private $altId;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer")
     */
    private $formId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ma_id", type="integer")
     */
    private $maId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fil_id", type="integer")
     */
    private $filId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbconnect_act", type="integer")
     */
    private $nbconnectAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtconnect_act", type="datetime")
     */
    private $dtconnectAct;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise_ma", type="string", length=255)
     */
    private $entrepriseMa;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat_act", type="string", length=255)
     */
    private $contratAct;


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
     * Set login
     *
     * @param string $login
     * @return acteur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return acteur
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set civAct
     *
     * @param string $civAct
     * @return acteur
     */
    public function setCivAct($civAct)
    {
        $this->civAct = $civAct;
    
        return $this;
    }

    /**
     * Get civAct
     *
     * @return string 
     */
    public function getCivAct()
    {
        return $this->civAct;
    }

    /**
     * Set nomAct
     *
     * @param string $nomAct
     * @return acteur
     */
    public function setNomAct($nomAct)
    {
        $this->nomAct = $nomAct;
    
        return $this;
    }

    /**
     * Get nomAct
     *
     * @return string 
     */
    public function getNomAct()
    {
        return $this->nomAct;
    }

    /**
     * Set prnAct
     *
     * @param string $prnAct
     * @return acteur
     */
    public function setPrnAct($prnAct)
    {
        $this->prnAct = $prnAct;
    
        return $this;
    }

    /**
     * Get prnAct
     *
     * @return string 
     */
    public function getPrnAct()
    {
        return $this->prnAct;
    }

    /**
     * Set telAct
     *
     * @param string $telAct
     * @return acteur
     */
    public function setTelAct($telAct)
    {
        $this->telAct = $telAct;
    
        return $this;
    }

    /**
     * Get telAct
     *
     * @return string 
     */
    public function getTelAct()
    {
        return $this->telAct;
    }

    /**
     * Set mel1Act
     *
     * @param string $mel1Act
     * @return acteur
     */
    public function setMel1Act($mel1Act)
    {
        $this->mel1Act = $mel1Act;
    
        return $this;
    }

    /**
     * Get mel1Act
     *
     * @return string 
     */
    public function getMel1Act()
    {
        return $this->mel1Act;
    }

    /**
     * Set mel2Act
     *
     * @param string $mel2Act
     * @return acteur
     */
    public function setMel2Act($mel2Act)
    {
        $this->mel2Act = $mel2Act;
    
        return $this;
    }

    /**
     * Get mel2Act
     *
     * @return string 
     */
    public function getMel2Act()
    {
        return $this->mel2Act;
    }

    /**
     * Set mobileAct
     *
     * @param string $mobileAct
     * @return acteur
     */
    public function setMobileAct($mobileAct)
    {
        $this->mobileAct = $mobileAct;
    
        return $this;
    }

    /**
     * Get mobileAct
     *
     * @return string 
     */
    public function getMobileAct()
    {
        return $this->mobileAct;
    }

    /**
     * Set adrAct
     *
     * @param string $adrAct
     * @return acteur
     */
    public function setAdrAct($adrAct)
    {
        $this->adrAct = $adrAct;
    
        return $this;
    }

    /**
     * Get adrAct
     *
     * @return string 
     */
    public function getAdrAct()
    {
        return $this->adrAct;
    }

    /**
     * Set villeAct
     *
     * @param string $villeAct
     * @return acteur
     */
    public function setVilleAct($villeAct)
    {
        $this->villeAct = $villeAct;
    
        return $this;
    }

    /**
     * Get villeAct
     *
     * @return string 
     */
    public function getVilleAct()
    {
        return $this->villeAct;
    }

    /**
     * Set cpAct
     *
     * @param string $cpAct
     * @return acteur
     */
    public function setCpAct($cpAct)
    {
        $this->cpAct = $cpAct;
    
        return $this;
    }

    /**
     * Get cpAct
     *
     * @return string 
     */
    public function getCpAct()
    {
        return $this->cpAct;
    }

    /**
     * Set paysAct
     *
     * @param string $paysAct
     * @return acteur
     */
    public function setPaysAct($paysAct)
    {
        $this->paysAct = $paysAct;
    
        return $this;
    }

    /**
     * Get paysAct
     *
     * @return string 
     */
    public function getPaysAct()
    {
        return $this->paysAct;
    }

    /**
     * Set altId
     *
     * @param integer $altId
     * @return acteur
     */
    public function setAltId($altId)
    {
        $this->altId = $altId;
    
        return $this;
    }

    /**
     * Get altId
     *
     * @return integer 
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * Set formId
     *
     * @param integer $formId
     * @return acteur
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    
        return $this;
    }

    /**
     * Get formId
     *
     * @return integer 
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * Set maId
     *
     * @param integer $maId
     * @return acteur
     */
    public function setMaId($maId)
    {
        $this->maId = $maId;
    
        return $this;
    }

    /**
     * Get maId
     *
     * @return integer 
     */
    public function getMaId()
    {
        return $this->maId;
    }

    /**
     * Set filId
     *
     * @param integer $filId
     * @return acteur
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
     * Set nbconnectAct
     *
     * @param integer $nbconnectAct
     * @return acteur
     */
    public function setNbconnectAct($nbconnectAct)
    {
        $this->nbconnectAct = $nbconnectAct;
    
        return $this;
    }

    /**
     * Get nbconnectAct
     *
     * @return integer 
     */
    public function getNbconnectAct()
    {
        return $this->nbconnectAct;
    }

    /**
     * Set dtconnectAct
     *
     * @param \DateTime $dtconnectAct
     * @return acteur
     */
    public function setDtconnectAct($dtconnectAct)
    {
        $this->dtconnectAct = $dtconnectAct;
    
        return $this;
    }

    /**
     * Get dtconnectAct
     *
     * @return \DateTime 
     */
    public function getDtconnectAct()
    {
        return $this->dtconnectAct;
    }

    /**
     * Set entrepriseMa
     *
     * @param string $entrepriseMa
     * @return acteur
     */
    public function setEntrepriseMa($entrepriseMa)
    {
        $this->entrepriseMa = $entrepriseMa;
    
        return $this;
    }

    /**
     * Get entrepriseMa
     *
     * @return string 
     */
    public function getEntrepriseMa()
    {
        return $this->entrepriseMa;
    }

    /**
     * Set contratAct
     *
     * @param string $contratAct
     * @return acteur
     */
    public function setContratAct($contratAct)
    {
        $this->contratAct = $contratAct;
    
        return $this;
    }

    /**
     * Get contratAct
     *
     * @return string 
     */
    public function getContratAct()
    {
        return $this->contratAct;
    }
}
