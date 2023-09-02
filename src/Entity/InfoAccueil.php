<?php

namespace App\Entity;

use App\Repository\InfoAccueilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoAccueilRepository::class)]
class InfoAccueil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $emplacement_bureau = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_info = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $texte_info = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): static
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEmplacementBureau(): ?string
    {
        return $this->emplacement_bureau;
    }

    public function setEmplacementBureau(string $emplacement_bureau): static
    {
        $this->emplacement_bureau = $emplacement_bureau;

        return $this;
    }

    public function getTitreInfo(): ?string
    {
        return $this->titre_info;
    }

    public function setTitreInfo(string $titre_info): static
    {
        $this->titre_info = $titre_info;

        return $this;
    }

    public function getTexteInfo(): ?string
    {
        return $this->texte_info;
    }

    public function setTexteInfo(string $texte_info): static
    {
        $this->texte_info = $texte_info;

        return $this;
    }
}
