<?php

namespace App\Repository;

use App\Entity\TypesRessources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypesRessources|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypesRessources|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypesRessources[]    findAll()
 * @method TypesRessources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypesRessourcesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypesRessources::class);
    }

    // /**
    //  * @return TypesRessources[] Returns an array of TypesRessources objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypesRessources
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
