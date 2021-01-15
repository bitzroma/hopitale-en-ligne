<?php

namespace App\Entity;

use App\Repository\SpecialisteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpecialisteRepository::class)
 */
class Specialiste
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
    private $nomSp;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $PrenomSp;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $emailSp;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $adresseSp;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $tele;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSp(): ?string
    {
        return $this->nomSp;
    }

    public function setNomSp(string $nomSp): self
    {
        $this->nomSp = $nomSp;

        return $this;
    }

    public function getPrenomSp(): ?string
    {
        return $this->PrenomSp;
    }

    public function setPrenomSp(string $PrenomSp): self
    {
        $this->PrenomSp = $PrenomSp;

        return $this;
    }

    public function getEmailSp(): ?string
    {
        return $this->emailSp;
    }

    public function setEmailSp(string $emailSp): self
    {
        $this->emailSp = $emailSp;

        return $this;
    }

    public function getAdresseSp(): ?string
    {
        return $this->adresseSp;
    }

    public function setAdresseSp(string $adresseSp): self
    {
        $this->adresseSp = $adresseSp;

        return $this;
    }

    public function getTele(): ?string
    {
        return $this->tele;
    }

    public function setTele(string $tele): self
    {
        $this->tele = $tele;

        return $this;
    }
}
