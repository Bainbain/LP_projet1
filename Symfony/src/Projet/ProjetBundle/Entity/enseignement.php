<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * enseignement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\enseignementRepository")
 */
class enseignement
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
     * @ORM\Column(name="grp_id", type="integer")
     */
    private $grpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_id", type="integer")
     */
    private $modId;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer")
     */
    private $formId;


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
     * Set grpId
     *
     * @param integer $grpId
     * @return enseignement
     */
    public function setGrpId($grpId)
    {
        $this->grpId = $grpId;
    
        return $this;
    }

    /**
     * Get grpId
     *
     * @return integer 
     */
    public function getGrpId()
    {
        return $this->grpId;
    }

    /**
     * Set modId
     *
     * @param integer $modId
     * @return enseignement
     */
    public function setModId($modId)
    {
        $this->modId = $modId;
    
        return $this;
    }

    /**
     * Get modId
     *
     * @return integer 
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Set formId
     *
     * @param integer $formId
     * @return enseignement
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
}
