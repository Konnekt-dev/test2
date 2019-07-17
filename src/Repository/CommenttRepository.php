<?php

namespace App\Repository;

use App\Entity\Commentt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Commentt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commentt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commentt[]    findAll()
 * @method Commentt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommenttRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Commentt::class);
    }

    // /**
    //  * @return Commentt[] Returns an array of Commentt objects
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
    public function findOneBySomeField($value): ?Commentt
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
