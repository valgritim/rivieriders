<?php

namespace App\Repository;

use App\Entity\Moto;
use App\Entity\MotoSearch;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @method Moto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moto[]    findAll()
 * @method Moto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Moto::class);
    }

    // /**
    //  * @return Moto[] Returns an array of Moto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /**
     * Permet de sélectionner toutes les motos ou selon critères du form de recherche
     * @param $search
     * @return array
     */
    public function findAllQuery(MotoSearch $search): array
    {
        $query = $this->createQueryBuilder('m');
                                                
        if($search->getCategory()){
            $query = $query->andWhere('m.category = :category')
                            ->setParameter('category', $search->getCategory());
        }

        if($search->getMaxPrice()){
            $query = $query->andWhere('m.price <= :maxPrice')
                            ->setParameter('maxPrice', $search->getMaxPrice());
        }

        if($search->getPassenger()){
            $query = $query->andWhere('m.passenger = :passenger')
                            ->setParameter('passenger', $search->getPassenger());
        }

        if($search->getSaddlebags()){
            $query = $query->andWhere('m.saddlebags = :saddlebags')
                            ->setparameter('saddlebags', $search->getSaddlebags());
        }

         return $query->getQuery()->execute();
    }

    
    
}
