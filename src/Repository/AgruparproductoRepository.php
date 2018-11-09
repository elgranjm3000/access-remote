<?php

namespace App\Repository;

use App\Entity\Agruparproducto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Agruparproducto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agruparproducto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agruparproducto[]    findAll()
 * @method Agruparproducto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgruparproductoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Agruparproducto::class);
    }

    // /**
    //  * @return Agruparproducto[] Returns an array of Agruparproducto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Agruparproducto
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
