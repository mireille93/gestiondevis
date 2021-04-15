<?php

namespace App\Repository;

use App\Entity\Item;
use App\Entity\Devvi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Item|null find($id, $lockMode = null, $lockVersion = null)
 * @method Item|null findOneBy(array $criteria, array $orderBy = null)
 * @method Item[]    findAll()
 * @method Item[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 //* @method Item[]    findByExampleField($value)
 */
class ItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Item::class);
    }


    /**
     * @return Item[] Returourne la liste des item a partir de l'id devis
     */

    public function findListeItem($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.id_devvi = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

     /**
      * @return Item[] Returns an array of Item objects
      */

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.id_devvi= :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(30)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findArray($array)
    {
        $qb = $this->createQueryBuilder('u')
            ->Select('u')
            ->Where('u.id IN (:array)')
            ->setParameter('array', $array);
        return $qb->getQuery()->getResult();
    }

    public function byDevis($id_devvi)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.id_devvi = :id_devvi')
            ->andWhere('u.disponible = 1')
            ->orderBy('u.id')
            ->setParameter('id_devvi', $id_devvi);
        return $qb->getQuery()->getResult();
    }


    /*
    public function findOneBySomeField($value): ?Item
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
