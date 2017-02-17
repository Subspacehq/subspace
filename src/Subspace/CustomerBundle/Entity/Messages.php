<?php 
// src/Subspace/CustomerBundle/Entity/Booking.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="Subspace\CustomerBundle\Repository\MessagesRepository")
*/
class Messages
{
	/**
	 * @ORM\Column(type="integer", unique=true)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $Id;

    /**  
     * @ORM\Column(type="text")
     */
    private $Subject;

    /**  
     * @ORM\Column(type="text")
     */
    private $Body;

    /**  
     * @ORM\Column(type="integer")
     */
    private $FromId;

    /**  
     * @ORM\Column(type="integer")
     */
    private $SentToId;

    /**  
     * @ORM\Column(type="date")
     */
    private $TimeReceived;


}
