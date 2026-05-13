<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(collection: "avis")]
class Avis
{
    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type: "float")]
    private float $note = 0;

    #[MongoDB\Field(type: "string")]
    private ?string $description = null;

    #[MongoDB\Field(type: "string")]
    private string $statut = "en_attente";

    #[MongoDB\Field(type: "int")]
    private ?int $utilisateurId = null;

    #[MongoDB\Field(type: "int")]
    private ?int $commandeId = null;

    // GETTERS & SETTERS
    public function getId(): ?string { return $this->id; }

    public function getNote(): float { return $this->note; }
    public function setNote(float $note): self { $this->note = $note; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): self { $this->description = $description; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getUtilisateurId(): ?int { return $this->utilisateurId; }
    public function setUtilisateurId(?int $id): self { $this->utilisateurId = $id; return $this; }

    public function getCommandeId(): ?int { return $this->commandeId; }
    public function setCommandeId(?int $id): self { $this->commandeId = $id; return $this; }
}