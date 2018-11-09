<?php

namespace App\Repository;

use App\Entity\Dpi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dpi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dpi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dpi[]    findAll()
 * @method Dpi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DpiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dpi::class);
    }

//    /**
//     * @return Dpi[] Returns an array of Dpi objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dpi
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
