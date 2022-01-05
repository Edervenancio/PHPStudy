<?php

namespace Source\Traits;

trait AddressTrait
{

    private $address;


    /**
     * @return Address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return mixed Address
     */ 
    // Injetando a classe Address no setAddress
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }
}