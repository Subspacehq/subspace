<?php 
// src/Subspace/CustomerBundle/Entity/Address.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="addresses")
*/
class Address
{
	/**
	 * @ORM\Column(type="integer", unique=true)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

    /**  
     * @ORM\Column(type="integer")
     */
    private $HouseNumber;

	/**	 
	 * @ORM\Column(type="string")
	 */
	private $AddressLine1;

	/**
	 * @ORM\Column(type="string")
	 */
	private $AddressLine2;

	/**	 
	 * @ORM\Column(type="string")
	 */
	private $AddressLine3;

	/**
	 * @ORM\Column(type="string")
	 */
	private $City;

	/**	 
	 * @ORM\Column(type="string")
	 */
	private $Postcode;

    /**
     * Get id
     *
     * @return \intiger
     */

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
     * Set houseNumber
     *
     * @param integer $houseNumber
     *
     * @return Address
     */
    public function setHouseNumber($houseNumber)
    {
        $this->HouseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return integer
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     *
     * @return Address
     */
    public function setAddressLine1($addressLine1)
    {
        $this->AddressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     *
     * @return Address
     */
    public function setAddressLine2($addressLine2)
    {
        $this->AddressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * Set addressLine3
     *
     * @param string $addressLine3
     *
     * @return Address
     */
    public function setAddressLine3($addressLine3)
    {
        $this->AddressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Get addressLine3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->Postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }
}
