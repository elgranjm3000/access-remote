<?php

namespace App\Repository;

use App\Entity\Contratar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contratar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contratar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contratar[]    findAll()
 * @method Contratar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContratarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contratar::class);
    }

//    /**
//     * @return Contratar[] Returns an array of Contratar objects
//     */
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
    public function findOneBySomeField($value): ?Contratar
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
