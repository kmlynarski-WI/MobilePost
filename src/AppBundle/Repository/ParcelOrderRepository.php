<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
use AppBundle\Model\ParcelOrderInterface;

/**
 * ParcelOrderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParcelOrderRepository extends \Doctrine\ORM\EntityRepository
{
	public function save(ParcelorderInterface $parcelorder) {
		$em = $this->getEntityManager();
        	$em->persist($parcelorder);
        	$em->flush();
    }
    public function find($id) {
		return $this->getEntityManager()->createQuery('SELECT p FROM AppBundle:ParcelOrder p WHERE p.id = ' . $id)->getResult();
	}
}
