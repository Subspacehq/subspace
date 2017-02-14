<?php
// src/Subspace/CustomerBundle/Utils/SpacesHelper.php

namespace Subspace\CustomerBundle\Utils;

use Subspace\CustomerBundle\Entity\Space;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SpacesHelper extends Bundle
{
	public function loadSpaces($query="all")
	{
		self::$kernel->getContainer();
		$locations = $this->get('doctrine');
		//        ->getRepository('Subspace\CustomerBundle:Space')
		//        ->findAll();
		$locations = "Testing";
		
		return $locations;
	}
}