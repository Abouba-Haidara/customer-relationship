<?php

namespace App\Repository;

use App\Entity\FicheService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FicheService|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheService|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheService[]    findAll()
 * @method FicheService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheService::class);
    }

    // /**
    //  * @return FicheService[] Returns an array of FicheService objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FicheService
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
