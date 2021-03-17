<?php

namespace App\Entity;

use App\Repository\RessourcesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RessourcesRepository::class)
 */
class Ressources
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $media;

    /**
     * @ORM\Column(type="boolean")
     */
    private $private;

    /**
     * @ORM\ManyToOne(targetEntity=TypesRessources::class, inversedBy="ressources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typesressources;

    /**
     * @ORM\ManyToOne(targetEntity=CategoriesRessources::class, inversedBy="ressources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoriesressources;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(?string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->private = $private;

        return $this;
    }

    public function getTypesressources(): ?TypesRessources
    {
        return $this->typesressources;
    }

    public function setTypesressources(?TypesRessources $typesressources): self
    {
        $this->typesressources = $typesressources;

        return $this;
    }

    public function getCategoriesressources(): ?CategoriesRessources
    {
        return $this->categoriesressources;
    }

    public function setCategoriesressources(?CategoriesRessources $categoriesressources): self
    {
        $this->categoriesressources = $categoriesressources;

        return $this;
    }
}
