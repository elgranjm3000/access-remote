<?php

namespace App\Repository;

use App\Entity\MovimientosAlmacen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MovimientosAlmacen|null find($id, $lockMode = null, $lockVersion = null)
 * @method MovimientosAlmacen|null findOneBy(array $criteria, array $orderBy = null)
 * @method MovimientosAlmacen[]    findAll()
 * @method MovimientosAlmacen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovimientosAlmacenRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MovimientosAlmacen::class);
    }

//    /**
//     * @return MovimientosAlmacen[] Returns an array of MovimientosAlmacen objects
//     */
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
    public function findOneBySomeField($value): ?MovimientosAlmacen
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
