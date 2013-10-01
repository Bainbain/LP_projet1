<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * grouper
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\grouperRepository")
 */
class grouper
{
    /**
     * @var integer
     *
     * @ORM\Column(name="grp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $grp_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="alt_id", type="integer")
	 * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $altId;


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
     * @return grouper
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
}
