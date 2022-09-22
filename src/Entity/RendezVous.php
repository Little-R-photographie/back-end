<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
#[ApiResource]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'sesRendezVous')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $client = null;

    #[ORM\ManyToMany(targetEntity: Prestation::class, inversedBy: 'ventes')]
    private Collection $ventes;

    public function __construct()
    {
        $this->ventes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getClient(): ?Utilisateur
    {
        return $this->client;
    }

    public function setClient(?Utilisateur $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection<int, Prestation>
     */
    public function getVentes(): Collection
    {
        return $this->ventes;
    }

    public function addVente(Prestation $vente): self
    {
        if (!$this->ventes->contains($vente)) {
            $this->ventes->add($vente);
        }

        return $this;
    }

    public function removeVente(Prestation $vente): self
    {
        $this->ventes->removeElement($vente);

        return $this;
    }
}
