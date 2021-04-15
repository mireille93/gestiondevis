<?php

namespace App\Repository;

use App\Entity\Isolateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Isolateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Isolateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Isolateur[]    findAll()
 * @method Isolateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IsolateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Isolateur::class);
    }

    // /**
    //  * @return Isolateur[] Returns an array of Isolateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Isolateur
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
