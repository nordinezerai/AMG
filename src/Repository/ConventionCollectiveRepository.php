<?php

namespace App\Repository;

use App\Entity\ConventionCollective;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConventionCollective|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConventionCollective|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConventionCollective[]    findAll()
 * @method ConventionCollective[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConventionCollectiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConventionCollective::class);
    }

    // /**
    //  * @return ConventionCollective[] Returns an array of ConventionCollective objects
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
    public function findOneBySomeField($value): ?ConventionCollective
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
