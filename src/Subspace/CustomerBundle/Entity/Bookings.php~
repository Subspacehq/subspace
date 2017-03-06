<?php 
// src/Subspace/CustomerBundle/Entity/Bookings.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bookings")
*/
class Bookings
{
	/**
	 * @ORM\Column(type="integer", unique=true)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $Id;

    /**  
     * @ORM\Column(type="date")
     */
    private $TimeFrom;

    /**  
     * @ORM\Column(type="integer")
     */
    private $TimeUntil;

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
     * Set timeFrom
     *
     * @param \DateTime $timeFrom
     *
     * @return Booking
     */
    public function setTimeFrom($timeFrom)
    {
        $this->TimeFrom = $timeFrom;

        return $this;
    }

    /**
     * Get timeFrom
     *
     * @return \DateTime
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * Set timeUntil
     *
     * @param integer $timeUntil
     *
     * @return Booking
     */
    public function setTimeUntil($timeUntil)
    {
        $this->TimeUntil = $timeUntil;

        return $this;
    }

    /**
     * Get timeUntil
     *
     * @return integer
     */
    public function getTimeUntil()
    {
        return $this->TimeUntil;
    }
}
