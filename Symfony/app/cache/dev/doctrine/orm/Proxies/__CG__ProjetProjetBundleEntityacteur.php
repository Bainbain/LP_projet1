<?php

namespace Proxies\__CG__\Projet\ProjetBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class acteur extends \Projet\ProjetBundle\Entity\acteur implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setCivAct($civAct)
    {
        $this->__load();
        return parent::setCivAct($civAct);
    }

    public function getCivAct()
    {
        $this->__load();
        return parent::getCivAct();
    }

    public function setNomAct($nomAct)
    {
        $this->__load();
        return parent::setNomAct($nomAct);
    }

    public function getNomAct()
    {
        $this->__load();
        return parent::getNomAct();
    }

    public function setPrnAct($prnAct)
    {
        $this->__load();
        return parent::setPrnAct($prnAct);
    }

    public function getPrnAct()
    {
        $this->__load();
        return parent::getPrnAct();
    }

    public function setTelAct($telAct)
    {
        $this->__load();
        return parent::setTelAct($telAct);
    }

    public function getTelAct()
    {
        $this->__load();
        return parent::getTelAct();
    }

    public function setMel1Act($mel1Act)
    {
        $this->__load();
        return parent::setMel1Act($mel1Act);
    }

    public function getMel1Act()
    {
        $this->__load();
        return parent::getMel1Act();
    }

    public function setMel2Act($mel2Act)
    {
        $this->__load();
        return parent::setMel2Act($mel2Act);
    }

    public function getMel2Act()
    {
        $this->__load();
        return parent::getMel2Act();
    }

    public function setMobileAct($mobileAct)
    {
        $this->__load();
        return parent::setMobileAct($mobileAct);
    }

    public function getMobileAct()
    {
        $this->__load();
        return parent::getMobileAct();
    }

    public function setAdrAct($adrAct)
    {
        $this->__load();
        return parent::setAdrAct($adrAct);
    }

    public function getAdrAct()
    {
        $this->__load();
        return parent::getAdrAct();
    }

    public function setVilleAct($villeAct)
    {
        $this->__load();
        return parent::setVilleAct($villeAct);
    }

    public function getVilleAct()
    {
        $this->__load();
        return parent::getVilleAct();
    }

    public function setCpAct($cpAct)
    {
        $this->__load();
        return parent::setCpAct($cpAct);
    }

    public function getCpAct()
    {
        $this->__load();
        return parent::getCpAct();
    }

    public function setPaysAct($paysAct)
    {
        $this->__load();
        return parent::setPaysAct($paysAct);
    }

    public function getPaysAct()
    {
        $this->__load();
        return parent::getPaysAct();
    }

    public function setAltId($altId)
    {
        $this->__load();
        return parent::setAltId($altId);
    }

    public function getAltId()
    {
        $this->__load();
        return parent::getAltId();
    }

    public function setFormId($formId)
    {
        $this->__load();
        return parent::setFormId($formId);
    }

    public function getFormId()
    {
        $this->__load();
        return parent::getFormId();
    }

    public function setMaId($maId)
    {
        $this->__load();
        return parent::setMaId($maId);
    }

    public function getMaId()
    {
        $this->__load();
        return parent::getMaId();
    }

    public function setNbconnectAct($nbconnectAct)
    {
        $this->__load();
        return parent::setNbconnectAct($nbconnectAct);
    }

    public function getNbconnectAct()
    {
        $this->__load();
        return parent::getNbconnectAct();
    }

    public function setDtconnectAct($dtconnectAct)
    {
        $this->__load();
        return parent::setDtconnectAct($dtconnectAct);
    }

    public function getDtconnectAct()
    {
        $this->__load();
        return parent::getDtconnectAct();
    }

    public function setEntrepriseMa($entrepriseMa)
    {
        $this->__load();
        return parent::setEntrepriseMa($entrepriseMa);
    }

    public function getEntrepriseMa()
    {
        $this->__load();
        return parent::getEntrepriseMa();
    }

    public function setContratAct($contratAct)
    {
        $this->__load();
        return parent::setContratAct($contratAct);
    }

    public function getContratAct()
    {
        $this->__load();
        return parent::getContratAct();
    }

    public function addFiliere(\Projet\ProjetBundle\Entity\filiere $filieres)
    {
        $this->__load();
        return parent::addFiliere($filieres);
    }

    public function removeFiliere(\Projet\ProjetBundle\Entity\filiere $filieres)
    {
        $this->__load();
        return parent::removeFiliere($filieres);
    }

    public function getFilieres()
    {
        $this->__load();
        return parent::getFilieres();
    }

    public function addGroupe(\Projet\ProjetBundle\Entity\groupe $groupes)
    {
        $this->__load();
        return parent::addGroupe($groupes);
    }

    public function removeGroupe(\Projet\ProjetBundle\Entity\groupe $groupes)
    {
        $this->__load();
        return parent::removeGroupe($groupes);
    }

    public function getGroupes()
    {
        $this->__load();
        return parent::getGroupes();
    }

    public function addEnseignement(\Projet\ProjetBundle\Entity\enseignement $enseignements)
    {
        $this->__load();
        return parent::addEnseignement($enseignements);
    }

    public function removeEnseignement(\Projet\ProjetBundle\Entity\enseignement $enseignements)
    {
        $this->__load();
        return parent::removeEnseignement($enseignements);
    }

    public function getEnseignements()
    {
        $this->__load();
        return parent::getEnseignements();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'login', 'password', 'civAct', 'nomAct', 'prnAct', 'telAct', 'mel1Act', 'mel2Act', 'mobileAct', 'adrAct', 'villeAct', 'cpAct', 'paysAct', 'altId', 'formId', 'maId', 'nbconnectAct', 'dtconnectAct', 'entrepriseMa', 'contratAct', 'filieres', 'groupes');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}