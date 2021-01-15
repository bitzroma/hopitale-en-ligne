<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $typeRv;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateRv;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $docteur;


    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="rendezvous")
     */
    private $userss;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $user;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->userss = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeRv(): ?string
    {
        return $this->typeRv;
    }

    public function setTypeRv(string $typeRv): self
    {
        $this->typeRv = $typeRv;

        return $this;
    }

    public function getDateRv(): ?\DateTimeInterface
    {
        return $this->dateRv;
    }

    public function setDateRv(\DateTimeInterface $dateRv): self
    {
        $this->dateRv = $dateRv;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDocteur(): ?string
    {
        return $this->docteur;
    }

    public function setDocteur(string $docteur): self
    {
        $this->docteur = $docteur;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserss(): Collection
    {
        return $this->userss;
    }

    public function addUserss(User $userss): self
    {
        if (!$this->userss->contains($userss)) {
            $this->userss[] = $userss;
            $userss->addRendezvou($this);
        }

        return $this;
    }

    public function removeUserss(User $userss): self
    {
        if ($this->userss->removeElement($userss)) {
            $userss->removeRendezvou($this);
        }

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;
        
        return $this;
    }
    public function __toString()
{
    return (string) $this->getUser();
}

    
}
