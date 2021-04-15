<?php

namespace App\Repository;

use App\Entity\Numdev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Numdev|null find($id, $lockMode = null, $lockVersion = null)
 * @method Numdev|null findOneBy(array $criteria, array $orderBy = null)
 * @method Numdev[]    findAll()
 * @method Numdev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumdevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Numdev::class);
    }

    // /**
    //  * @return Numdev[] Returns an array of Numdev objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Numdev
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
