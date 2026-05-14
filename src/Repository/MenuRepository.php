<?php
// src/Repository/MenuRepository.php
// ECF DWWM 2026 — Vite & Gourmand
// Conforme DC2 — extends ServiceEntityRepository
// Méthodes : findByFilters() · findByTheme() · findAutresMenus() · save()

namespace App\Repository;

use App\Entity\Menu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Menu>
 */
class MenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Menu::class);
    }

    /**
     * Filtrage AJAX — conforme DS3
     * SELECT * FROM menu WHERE theme=? AND prix<=? AND regime=?
     */
    public function findByFilters(
        ?string $theme  = null,
        ?float  $prix   = null,
        ?string $regime = null
    ): array {
        $qb = $this->createQueryBuilder('m');

        if ($theme && $theme !== '') {
            $qb->andWhere('m.theme = :theme')
               ->setParameter('theme', $theme);
        }

        if ($prix && $prix > 0) {
            $qb->andWhere('m.prix <= :prix')
               ->setParameter('prix', $prix);
        }

        if ($regime && $regime !== '') {
            $qb->andWhere('m.regime = :regime')
               ->setParameter('regime', $regime);
        }

        $qb->orderBy('m.prix', 'ASC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Menus par thème — conforme DC2
     */
    public function findByTheme(string $theme): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.theme = :theme')
            ->setParameter('theme', $theme)
            ->orderBy('m.prix', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * 3 autres menus pour la section "Vous aimerez aussi"
     * Exclut le menu courant
     */
    public function findAutresMenus(int $excludeId, int $limit = 3): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.id != :id')
            ->setParameter('id', $excludeId)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Menus disponibles (quantiteRestante > 0)
     */
    public function findDisponibles(): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.quantiteRestante > 0')
            ->orderBy('m.prix', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Sauvegarde un menu — conforme DC2
     */
    public function save(Menu $menu, bool $flush = true): void
    {
        $this->getEntityManager()->persist($menu);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
