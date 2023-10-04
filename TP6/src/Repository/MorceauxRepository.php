<?php

namespace App\Repository;

use App\Entity\Morceaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Morceaux>
 *
 * @method Morceaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Morceaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Morceaux[]    findAll()
 * @method Morceaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MorceauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Morceaux::class);
    }

//    /**
//     * @return Morceaux[] Returns an array of Morceaux objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Morceaux
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
