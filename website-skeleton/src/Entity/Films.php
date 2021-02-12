<?php

namespace App\Entity;

use App\Repository\FilmsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilmsRepository::class)
 */
class Films
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Film;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilm(): ?string
    {
        return $this->Film;
    }

    public function setFilm(string $Film): self
    {
        $this->Film = $Film;

        return $this;
    }
}
