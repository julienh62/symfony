<?php

namespace App\Repository;

use App\Entity\PurchaseItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<PurchaseItem>
 *
 * @method PurchaseItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method PurchaseItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method PurchaseItem[]    findAll()
 * @method PurchaseItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PurchaseItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PurchaseItem::class);
    }

    public function save(PurchaseItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PurchaseItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getPurchaseQuantitySum($id)
    {
        // requete sql qui fonctionne dans php my admin SELECT SUM(`quantity`) FROM `purchase_item` WHERE `calendar_id` = 5;
    /*   
      return $this->createQueryBuilder('p')
       ->select('SUM(p.quantity)')
       ->where('p.quantity = 5000')
    
      //->andWhere('p.id = :id')         
     
   //    ->setParameter('id', $id)
        ->getQuery()
        ->getResult()
    ;
*/

$conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT SUM(`quantity`) FROM `purchase_item` WHERE `calendar_id` = :id;
            ';

        $resultSet = $conn->executeQuery($sql, ['id' => $id]);

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
/*
        $query = $this->getEntityManager()->createQuery("SELECT SUM(quantity) FROM App\Entity\PurchaseItem WHERE calendar.id = $id
    ");
 //  return $query->getResult();
 print_r ($query->getResult());*/
    }


//    /**
//     * @return PurchaseItem[] Returns an array of PurchaseItem objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PurchaseItem
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

