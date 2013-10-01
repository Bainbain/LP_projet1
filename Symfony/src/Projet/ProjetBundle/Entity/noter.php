<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * noter
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\noterRepository")
 */
class noter
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
     * @var integer
     *
     * @ORM\Column(name="alt_id", type="integer")
     */
    private $altId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctlr_id", type="integer")
     */
    private $ctlrId;

    /**
     * @var string
     *
     * @ORM\Column(name="ctrl_note", type="string", length=255)
     */
    private $ctrlNote;


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
     * Set altId
     *
     * @param integer $altId
     * @return noter
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
     * Set ctlrId
     *
     * @param integer $ctlrId
     * @return noter
     */
    public function setCtlrId($ctlrId)
    {
        $this->ctlrId = $ctlrId;
    
        return $this;
    }

    /**
     * Get ctlrId
     *
     * @return integer 
     */
    public function getCtlrId()
    {
        return $this->ctlrId;
    }

    /**
     * Set ctrlNote
     *
     * @param string $ctrlNote
     * @return noter
     */
    public function setCtrlNote($ctrlNote)
    {
        $this->ctrlNote = $ctrlNote;
    
        return $this;
    }

    /**
     * Get ctrlNote
     *
     * @return string 
     */
    public function getCtrlNote()
    {
        return $this->ctrlNote;
    }
}
