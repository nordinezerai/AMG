<?php

namespace App\Entity;

use App\Repository\NafRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NafRepository::class)
 */
class Naf
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
    private $code_naf;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeNaf(): ?string
    {
        return $this->code_naf;
    }

    public function setCodeNaf(string $code_naf): self
    {
        $this->code_naf = $code_naf;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

}
