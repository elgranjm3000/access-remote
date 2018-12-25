<?php

namespace App\Repository;

use App\Entity\Metas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Metas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Metas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Metas[]    findAll()
 * @method Metas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Metas::class);
    }

    // /**
    //  * @return Metas[] Returns an array of Metas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Metas
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
