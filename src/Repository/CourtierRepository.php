<?php

namespace App\Repository;

use App\Entity\Courtier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Courtier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Courtier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Courtier[]    findAll()
 * @method Courtier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourtierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Courtier::class);
    }

    // /**
    //  * @return Courtier[] Returns an array of Courtier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Courtier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
