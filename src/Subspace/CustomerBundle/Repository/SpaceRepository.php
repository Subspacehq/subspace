<?php
// src/Subspace/CustomerBundle/Repository/SpaceRepository.php
namespace Subspace\CustomerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SpaceRepository extends EntityRepository
{
    public function findAllSpaces()
    {
        $query = $this->getEntityManager()
        ->createQuery(
            'SELECT s FROM SubspaceCustomerBundle:Space s
            INNER JOIN SubspaceCustomerBundle:Address a WITH s.AddressId = a.Id');
	    try {
	        return $query->getResult();
	    } catch (\Doctrine\ORM\NoResultException $e) {
	        return null;
	    }
    }
}