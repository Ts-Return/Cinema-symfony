<?php

namespace App\Entity;

use App\Repository\ActeursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActeursRepository::class)
 */
class Acteurs
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
    private $Acteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActeur(): ?string
    {
        return $this->Acteur;
    }

    public function setActeur(string $Acteur): self
    {
        $this->Acteur = $Acteur;

        return $this;
    }
}
