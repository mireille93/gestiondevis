<?php

namespace App\Repository;

use App\Entity\Commandeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commandeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commandeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commandeur[]    findAll()
 * @method Commandeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commandeur::class);
    }

    // /**
    //  * @return Commandeur[] Returns an array of Commandeur objects
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
    public function findOneBySomeField($value): ?Commandeur
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
