<?php

namespace App\Repository;

use App\Entity\Devvi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Devvi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Devvi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Devvi[]    findAll()
 * @method Devvi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevviRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Devvi::class);
    }

    // /**
    //  * @return Devvi[] Returns an array of Devvi objects
    //  */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(30)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Devvi
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
