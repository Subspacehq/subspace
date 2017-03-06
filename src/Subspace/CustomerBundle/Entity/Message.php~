<?php 
// src/Subspace/CustomerBundle/Entity/Message.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="messages")
 * @ORM\Entity(repositoryClass="Subspace\CustomerBundle\Repository\MessagesRepository")
*/
class Message
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
     * @ORM\Column(type="datetime")
     */
    private $TimeReceived;

    /**  
     * @ORM\Column(type="string")
     */
    private $Status;

    /**  
     * @ORM\Column(type="datetime")
     */
    private $TimeRead;


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
     * Set subject
     *
     * @param string $subject
     *
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->Subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Message
     */
    public function setBody($body)
    {
        $this->Body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->Body;
    }

    /**
     * Set fromId
     *
     * @param integer $fromId
     *
     * @return Message
     */
    public function setFromId($fromId)
    {
        $this->FromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return integer
     */
    public function getFromId()
    {
        return $this->FromId;
    }

    /**
     * Set sentToId
     *
     * @param integer $sentToId
     *
     * @return Message
     */
    public function setSentToId($sentToId)
    {
        $this->SentToId = $sentToId;

        return $this;
    }

    /**
     * Get sentToId
     *
     * @return integer
     */
    public function getSentToId()
    {
        return $this->SentToId;
    }

    /**
     * Set timeReceived
     *
     * @param \DateTime $timeReceived
     *
     * @return Message
     */
    public function setTimeReceived($timeReceived)
    {
        $this->TimeReceived = $timeReceived;

        return $this;
    }

    /**
     * Get timeReceived
     *
     * @return \DateTime
     */
    public function getTimeReceived()
    {
        return $this->TimeReceived;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Message
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set timeRead
     *
     * @param \DateTime $timeRead
     *
     * @return Message
     */
    public function setTimeRead($timeRead)
    {
        $this->TimeRead = $timeRead;

        return $this;
    }

    /**
     * Get timeRead
     *
     * @return \DateTime
     */
    public function getTimeRead()
    {
        return $this->TimeRead;
    }
}
