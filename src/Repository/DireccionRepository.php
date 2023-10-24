<?php

namespace App\Repository;

use App\Entity\Direccion;
use App\Utils\Functions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Direccion>
 *
 * @method Direccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Direccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Direccion[]    findAll()
 * @method Direccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DireccionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Direccion::class);
    }

//    /**
//     * @return Direccion[] Returns an array of Direccion objects
//     */
public function findAllWithPagination(int $currentPage, int $limit): Paginator
    {
        //creamos query
        $query = $this->createQueryBuilder('p')
        ->getQuery();

        //creamos paginator con la funcion paginate
        $paginator = Functions::paginate($query, $currentPage, $limit);

        return $paginator;
    }

//    public function findOneBySomeField($value): ?Direccion
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
