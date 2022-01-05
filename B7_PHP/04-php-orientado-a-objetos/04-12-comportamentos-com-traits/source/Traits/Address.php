<?php

namespace Source\Traits;

class Address
{

    private $number;
    private $street; 
    private $complement;

    
    public function __construct($number, $street, $complement)
    {
        $this->number=  $number;
        $this->street = $street;
        $this->complement = $complement;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Get the value of complement
     */ 
    public function getComplement()
    {
        return $this->complement;
    }
}