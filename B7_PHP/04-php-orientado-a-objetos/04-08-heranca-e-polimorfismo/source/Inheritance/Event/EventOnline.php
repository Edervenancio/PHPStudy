<?php

namespace Source\Inheritance\Event;


class EventOnline extends Event
    // associando o endereço na classe address
{
    private $link;

    // herdando a classe pai com exceção do link
    public function __construct($event, \DateTime $date, $price, $link, $vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    // sobrescrevendo a register da class Event
    public function register($fullname, $email)
    {
        $this->vacancies >= 1;
        $this->setRegister($fullname, $email);
        echo "<p>Show {$fullname}, cadastrado com sucesso!</p>";
    }    

}