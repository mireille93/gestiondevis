<?php

namespace App\Repository;

use App\Entity\Sectionneur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sectionneur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sectionneur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sectionneur[]    findAll()
 * @method Sectionneur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionneurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sectionneur::class);
    }

    // /**
    //  * @return Sectionneur[] Returns an array of Sectionneur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sectionneur
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
