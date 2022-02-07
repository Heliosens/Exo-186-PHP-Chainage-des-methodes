<?php


class VODService
{
    private string $nom;
    private float $price;

    public function __construct($nom, $price){
        $this->setNom($nom);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return VODService
     */
    public function setNom(string $nom): VODService
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return VODService
     */
    public function setPrice(float $price): VODService
    {
        $this->price = $price;
        return $this;
    }


}