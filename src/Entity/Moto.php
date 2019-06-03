<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Cocur\Slugify\Slugify;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MotoRepository")
 * @UniqueEntity("model")
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
     * @Assert\Length(min=7, max= 50)
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
     * @Assert\Type("float")
     */
    private $tank;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saddlebags;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex("/^[0-9]{3}$/")
     */
    private $saddleheight;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex("/^[0-9]{3}$/")
     */
    private $weight;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Regex("/^[0-9]{3}$/")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $passenger;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="motos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

      
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

    public function getPassenger(): ?bool
    {
        return $this->passenger;
    }

    public function setPassenger(?bool $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
    
}
