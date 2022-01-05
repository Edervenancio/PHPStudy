<?php

namespace Source\Related;

class Product
{

    private $name;
    private $price;

    public function __construct($name, $price)
    {
     $this->name = $name;
     $this->price = $price;   
    }





    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return number_format($this->price, "2", ".", ",");
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }



}