<?php

namespace App\Entity;

use App\Repository\DoctorsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DoctorsRepository::class)
 */
class Doctors
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
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\ManyToOne(targetEntity=Specjalizations::class, inversedBy="doctors")
     */
    private $Specjalizations;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSpecjalizations(): ?Specjalizations
    {
        return $this->Specjalizations;
    }

    public function setSpecjalizations(?Specjalizations $Specjalizations): self
    {
        $this->Specjalizations = $Specjalizations;

        return $this;
    }
}
