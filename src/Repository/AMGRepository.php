<?php

namespace App\Repository;

use App\Entity\AMG;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AMG|null find($id, $lockMode = null, $lockVersion = null)
 * @method AMG|null findOneBy(array $criteria, array $orderBy = null)
 * @method AMG[]    findAll()
 * @method AMG[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AMGRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AMG::class);
    }

    // /**
    //  * @return AMG[] Returns an array of AMG objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AMG
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
