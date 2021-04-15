<?php

namespace App\Repository;

use App\Entity\Caisson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Caisson|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caisson|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caisson[]    findAll()
 * @method Caisson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaissonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caisson::class);
    }

    // /**
    //  * @return Caisson[] Returns an array of Caisson objects
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
    public function findOneBySomeField($value): ?Caisson
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
