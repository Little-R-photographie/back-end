<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[ApiResource]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 1000)]
    private ?string $paragraphe_1 = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $paragraphe_2 = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $paragraphe_3 = null;

    #[ORM\Column(length: 1000)]
    private ?string $illustration_1 = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $illustration_2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getParagraphe1(): ?string
    {
        return $this->paragraphe_1;
    }

    public function setParagraphe1(string $paragraphe_1): self
    {
        $this->paragraphe_1 = $paragraphe_1;

        return $this;
    }

    public function getParagraphe2(): ?string
    {
        return $this->paragraphe_2;
    }

    public function setParagraphe2(?string $paragraphe_2): self
    {
        $this->paragraphe_2 = $paragraphe_2;

        return $this;
    }

    public function getParagraphe3(): ?string
    {
        return $this->paragraphe_3;
    }

    public function setParagraphe3(?string $paragraphe_3): self
    {
        $this->paragraphe_3 = $paragraphe_3;

        return $this;
    }

    public function getIllustration1(): ?string
    {
        return $this->illustration_1;
    }

    public function setIllustration1(string $illustration_1): self
    {
        $this->illustration_1 = $illustration_1;

        return $this;
    }

    public function getIllustration2(): ?string
    {
        return $this->illustration_2;
    }

    public function setIllustration2(?string $illustration_2): self
    {
        $this->illustration_2 = $illustration_2;

        return $this;
    }
}
