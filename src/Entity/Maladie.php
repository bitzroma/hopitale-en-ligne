<?php

namespace App\Entity;

use App\Repository\MaladieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MaladieRepository::class)
 */
class Maladie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $nomMal;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMal(): ?string
    {
        return $this->nomMal;
    }

    public function setNomMal(string $nomMal): self
    {
        $this->nomMal = $nomMal;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
