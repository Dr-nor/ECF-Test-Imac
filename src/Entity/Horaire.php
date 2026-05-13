<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $jour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureOuv = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heureFerm = null;

    #[ORM\Column]
    private ?bool $ferme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeureOuv(): ?\DateTime
    {
        return $this->heureOuv;
    }

    public function setHeureOuv(\DateTime $heureOuv): static
    {
        $this->heureOuv = $heureOuv;

        return $this;
    }

    public function getHeureFerm(): ?\DateTime
    {
        return $this->heureFerm;
    }

    public function setHeureFerm(\DateTime $heureFerm): static
    {
        $this->heureFerm = $heureFerm;

        return $this;
    }

    public function isFerme(): ?bool
    {
        return $this->ferme;
    }

    public function setFerme(bool $ferme): static
    {
        $this->ferme = $ferme;

        return $this;
    }
}
