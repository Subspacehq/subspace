<?php 
// src/Subspace/CustomerBundle/Entity/User.php

namespace Subspace\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
*/
class User
{
	/**
	 * @ORM\Column(type="intiger")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length="255")
	 */
	private $email;

	/**
	 * @ORM\Column(type="string", length="255")
	 */
	private $firstName;

	/**
	 * @ORM\Column(type="string", length="255")
	 */
	private $lastName;
}