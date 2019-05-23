<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MotoRepository")
 */
class Moto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide !")
     */
    private $model;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide !")
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide !")
     */
    private $coverImg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $moteur;

    /**
     * @ORM\Column(type="float")
     */
    private $tank;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saddlebags;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $saddleheight;

    /**
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    
    public function getSlug(): ?string
    {
        return (new Slugify())->slugify($this->model); 
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCoverImg(): ?string
    {
        return $this->coverImg;
    }

    public function setCoverImg(string $coverImg): self
    {
        $this->coverImg = $coverImg;

        return $this;
    }

    public function getMoteur(): ?string
    {
        return $this->moteur;
    }

    public function setMoteur(?string $moteur): self
    {
        $this->moteur = $moteur;

        return $this;
    }

    public function getTank(): ?float
    {
        return $this->tank;
    }

    public function setTank(float $tank): self
    {
        $this->tank = $tank;

        return $this;
    }

    public function getSaddlebags(): ?bool
    {
        return $this->saddlebags;
    }

    public function setSaddlebags(?bool $saddlebags): self
    {
        $this->saddlebags = $saddlebags;

        return $this;
    }

    public function getSaddleheight(): ?int
    {
        return $this->saddleheight;
    }

    public function setSaddleheight(?int $saddleheight): self
    {
        $this->saddleheight = $saddleheight;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
