<?php
// src/Subspace/CustomerBundle/Repository/SpacesRepository.php
namespace Subspace\CustomerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SpacesRepository extends EntityRepository
{
    public function findAllSpaces()
    {
        $query = $this->getEntityManager()
        ->createQuery(
            'SELECT s FROM SubspaceCustomerBundle:Spaces s
            INNER JOIN SubspaceCustomerBundle:Addresses a WITH s.AddressId = a.Id');
	    try {
	        return $query->getResult();
	    } catch (\Doctrine\ORM\NoResultException $e) {
	        return null;
	    }
    }
}