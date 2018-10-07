<?php

namespace App\Repository;

use App\Entity\FechaNacimiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FechaNacimiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method FechaNacimiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method FechaNacimiento[]    findAll()
 * @method FechaNacimiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FechaNacimientoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FechaNacimiento::class);
    }

//    /**
//     * @return FechaNacimiento[] Returns an array of FechaNacimiento objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FechaNacimiento
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
