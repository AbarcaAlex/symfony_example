<?php

namespace App\Repository;

use App\Entity\Usuario;
use App\Utils\Functions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Usuario>
 *
 * @method Usuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuario[]    findAll()
 * @method Usuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usuario::class);
    }

//    /**
//     * @return Usuario[] Returns an array of Usuario objects
//     */
    /*public function findUsuariosQueEmpiezanConA(): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.nombre like A%')
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findAllWithPagination(int $currentPage, int $limit): Paginator
    {
        //creamos query
        $query = $this->createQueryBuilder('p')
        ->getQuery();

        //creamos paginator con la funcion paginate
        $paginator = Functions::paginate($query, $currentPage, $limit);

        return $paginator;
    }


}
