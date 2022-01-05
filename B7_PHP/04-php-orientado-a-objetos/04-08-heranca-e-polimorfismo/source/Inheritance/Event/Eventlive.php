<?php

namespace Source\Inheritance\Event;
use Source\Inheritance\Address;
class Eventlive extends Event
// Herdar tudo que é permitido na event para a Eventlive
{

    
/**
 * @var Address
 */

    private $address;

    // associando o endereço na classe address
    public function __construct($event, \DateTime $date, $price, $vacancies, Address $address)
    { 
        parent:: __construct($event, $date, $price, $vacancies);
        $this->address = $address;
        // Executando o construtor da classe pai
    }


    /**
     * Get the value of address
     */ 
    public function getAddress(): Address
    {
        return $this->address;
    }
}