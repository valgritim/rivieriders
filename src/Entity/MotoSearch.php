<?php

namespace App\Entity;

use App\Entity\Category;


class MotoSearch {
    /**
     * Undocumented variable
     *
     * @var string|null
     */
    private $category;

    /**
     * Undocumented variable
     *
     * @var bool|null
     */
    private $passenger;

    /**
     * Undocumented variable
     *
     * @var bool|null
     */
    private $saddlebags;

    /**
     * Undocumented variable
     *
     * @var int|null
     */
    private $maxPrice;

// Mise en place des getters et setters

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Undocumented function
     *
     * @param string|null $category
     * @return self
     */    
    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return boolean|null
     */
    public function getPassenger(): ?bool
    {
        return $this->passenger;
    }

    /**
     * Undocumented function
     *
     * @param boolean $passenger
     * @return self
     */
    public function setPassenger(bool $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return boolean|null
     */
    public function getSaddlebags(): ?bool
    {
        return $this->saddlebags;
    }

    /**
     * Undocumented function
     *
     * @param boolean $saddlebags
     * @return self
     */
    public function setSaddlebags(bool $saddlebags): self
    {
        $this->saddlebags = $saddlebags;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * Undocumented function
     *
     * @param integer $maxPrice
     * @return self
     */
    public function setMaxPrice(int $maxPrice): self
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }
}
