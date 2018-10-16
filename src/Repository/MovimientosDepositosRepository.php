<?php

namespace App\Repository;

use App\Entity\MovimientosDepositos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MovimientosDepositos|null find($id, $lockMode = null, $lockVersion = null)
 * @method MovimientosDepositos|null findOneBy(array $criteria, array $orderBy = null)
 * @method MovimientosDepositos[]    findAll()
 * @method MovimientosDepositos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovimientosDepositosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MovimientosDepositos::class);
    }

//    /**
//     * @return MovimientosDepositos[] Returns an array of MovimientosDepositos objects
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
    public function findOneBySomeField($value): ?MovimientosDepositos
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
