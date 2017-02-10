<?php
// src/Subspace/CustomerBundle/Utils/SpacesHelper.php

namespace Subspace\CustomerBundle\Utils;

use Subspace\CustomerBundle\Entity\Space;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class SpacesHelper
{
	public function loadSpaces($query="all")
	{
		//$locations = $this->get('doctrine')
		//        ->getRepository('Subspace\CustomerBundle:Space')
		//        ->findAll();
		$locations = "Testing";
		
		return $locations;
	}
}