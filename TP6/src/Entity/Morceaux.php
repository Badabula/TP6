<?php

namespace App\Entity;

use App\Repository\MorceauxRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MorceauxRepository::class)]
class Morceaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $duree = null;

    #[ORM\ManyToOne(inversedBy: 'morceauxes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Album $album = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function setId(int $Id): self
    {
        $this->id = $Id;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): static
    {
        $this->album = $album;

        return $this;
    }
}
