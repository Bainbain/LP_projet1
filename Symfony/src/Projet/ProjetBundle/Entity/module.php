<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * module
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\moduleRepository")
 */
class module
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
     * @ORM\Column(name="mod_code", type="string", length=255)
     */
    private $modCode;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_lib", type="string", length=255)
     */
    private $modLib;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_coef", type="integer")
     */
    private $modCoef;

    /**
     * @var integer
     *
     * @ORM\Column(name="unite_id", type="integer")
     */
    private $uniteId;


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
     * Set modCode
     *
     * @param string $modCode
     * @return module
     */
    public function setModCode($modCode)
    {
        $this->modCode = $modCode;
    
        return $this;
    }

    /**
     * Get modCode
     *
     * @return string 
     */
    public function getModCode()
    {
        return $this->modCode;
    }

    /**
     * Set modLib
     *
     * @param string $modLib
     * @return module
     */
    public function setModLib($modLib)
    {
        $this->modLib = $modLib;
    
        return $this;
    }

    /**
     * Get modLib
     *
     * @return string 
     */
    public function getModLib()
    {
        return $this->modLib;
    }

    /**
     * Set modCoef
     *
     * @param integer $modCoef
     * @return module
     */
    public function setModCoef($modCoef)
    {
        $this->modCoef = $modCoef;
    
        return $this;
    }

    /**
     * Get modCoef
     *
     * @return integer 
     */
    public function getModCoef()
    {
        return $this->modCoef;
    }

    /**
     * Set uniteId
     *
     * @param integer $uniteId
     * @return module
     */
    public function setUniteId($uniteId)
    {
        $this->uniteId = $uniteId;
    
        return $this;
    }

    /**
     * Get uniteId
     *
     * @return integer 
     */
    public function getUniteId()
    {
        return $this->uniteId;
    }
}
