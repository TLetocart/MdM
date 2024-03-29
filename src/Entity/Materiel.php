<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min :2)]
    #[Assert\NotBlank()]
    private ?string $nom = null;

    #[ORM\Column]
    #[Assert\Positive()]
    private ?float $prix_ht = null;

    #[ORM\Column(length: 255)]
    private ?string $TVA = null;

    #[ORM\Column]
    #[Assert\Positive()]
    private ?float $prix_ttc = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero]
    private ?int $quantite = null;

    #[ORM\Column]
    #[Assert\NotNull()]
    private ?\DateTimeImmutable $date_de_creation = null;

    public function __construct()
    {
        $this->date_de_creation = new \DateTimeImmutable();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrixHt(): ?float
    {
        return $this->prix_ht;
    }

    public function setPrixHt(float $prix_ht): static
    {
        $this->prix_ht = $prix_ht;

        return $this;
    }

    public function getTVA(): ?string
    {
        return $this->TVA;
    }

    public function setTVA(string $TVA): static
    {
        $this->TVA = $TVA;

        return $this;
    }

    public function getPrixTtc(): ?float
    {
        return $this->prix_ttc;
    }

    public function setPrixTtc(float $prix_ttc): static
    {
        $this->prix_ttc = $prix_ttc;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateDeCreation(): ?\DateTimeImmutable
    {
        return $this->date_de_creation;
    }

    public function setDateDeCreation(\DateTimeImmutable $date_de_creation): static
    {
        $this->date_de_creation = $date_de_creation;

        return $this;
    }
}
