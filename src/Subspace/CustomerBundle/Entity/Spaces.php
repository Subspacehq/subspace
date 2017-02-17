<?php 
// src/Subspace/CustomerBundle/Entity/Space.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="spaces")
 * @ORM\Entity(repositoryClass="Subspace\CustomerBundle\Repository\SpacesRepository")
*/
class Spaces
{
	/**
	 * @ORM\Column(type="integer", unique=true)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $Id;

    /**  
     * @ORM\Column(type="string")
     */
    private $Name;

    /**  
     * @ORM\Column(type="integer")
     */
    private $AddressId;

    /**  
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Space
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     *
     * @return Space
     */
    public function setAddressId($addressId)
    {
        $this->AddressId = $addressId;

        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Space
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
}
