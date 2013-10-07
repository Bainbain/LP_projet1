<?php

namespace Proxies\__CG__\Projet\ProjetBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class filiere extends \Projet\ProjetBundle\Entity\filiere implements \Doctrine\ORM\Proxy\Proxy
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

    public function setFilCode($filCode)
    {
        $this->__load();
        return parent::setFilCode($filCode);
    }

    public function getFilCode()
    {
        $this->__load();
        return parent::getFilCode();
    }

    public function setFilLibelle($filLibelle)
    {
        $this->__load();
        return parent::setFilLibelle($filLibelle);
    }

    public function getFilLibelle()
    {
        $this->__load();
        return parent::getFilLibelle();
    }

    public function setFilDetail($filDetail)
    {
        $this->__load();
        return parent::setFilDetail($filDetail);
    }

    public function getFilDetail()
    {
        $this->__load();
        return parent::getFilDetail();
    }

    public function setRespId($respId)
    {
        $this->__load();
        return parent::setRespId($respId);
    }

    public function getRespId()
    {
        $this->__load();
        return parent::getRespId();
    }

    public function setFilType($filType)
    {
        $this->__load();
        return parent::setFilType($filType);
    }

    public function getFilType()
    {
        $this->__load();
        return parent::getFilType();
    }

    public function setAssistId($assistId)
    {
        $this->__load();
        return parent::setAssistId($assistId);
    }

    public function getAssistId()
    {
        $this->__load();
        return parent::getAssistId();
    }

    public function setFilDebut($filDebut)
    {
        $this->__load();
        return parent::setFilDebut($filDebut);
    }

    public function getFilDebut()
    {
        $this->__load();
        return parent::getFilDebut();
    }

    public function setFilFin($filFin)
    {
        $this->__load();
        return parent::setFilFin($filFin);
    }

    public function getFilFin()
    {
        $this->__load();
        return parent::getFilFin();
    }

    public function setActeurResp(\Projet\ProjetBundle\Entity\acteur $acteurResp)
    {
        $this->__load();
        return parent::setActeurResp($acteurResp);
    }

    public function getActeurResp()
    {
        $this->__load();
        return parent::getActeurResp();
    }

    public function setActeurAssist(\Projet\ProjetBundle\Entity\acteur $acteurAssist)
    {
        $this->__load();
        return parent::setActeurAssist($acteurAssist);
    }

    public function getActeurAssist()
    {
        $this->__load();
        return parent::getActeurAssist();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'filCode', 'filLibelle', 'filDetail', 'filType', 'filDebut', 'filFin', 'acteur_resp', 'acteur_assist');
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