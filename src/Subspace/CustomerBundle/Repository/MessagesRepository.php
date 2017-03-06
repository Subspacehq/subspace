<?php
// src/Subspace/CustomerBundle/Repository/SpacesRepository.php
namespace Subspace\CustomerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MessagesRepository extends EntityRepository
{
    public function findUserMessages($user_id)
    {
        $query = $this->getEntityManager()
        ->createQuery(
            'SELECT m FROM SubspaceCustomerBundle:Message m WHERE m.SentToId = '.$user_id);
	    try {
	        return $query->getResult();
	    } catch (\Doctrine\ORM\NoResultException $e) {
	        return null;
	    }
    }
}