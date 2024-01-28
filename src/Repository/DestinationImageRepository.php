<?php

namespace App\Repository;

use App\Entity\DestinationImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DestinationImage>
 *
 * @method DestinationImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DestinationImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DestinationImage[]    findAll()
 * @method DestinationImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DestinationImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DestinationImage::class);
    }

//    /**
//     * @return DestinationImage[] Returns an array of DestinationImage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DestinationImage
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
