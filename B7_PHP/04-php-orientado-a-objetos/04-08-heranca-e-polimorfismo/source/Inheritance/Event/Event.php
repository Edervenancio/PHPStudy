<?php

namespace Source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    // o Construtor constrói o evento, nada mais. 
    // Voltar no diretório raiz e pegar a classe date time do php
    public function __construct($event, \DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    // o Register registra as pessoas, nada mais
    
    public function register($fullname, $email)
    {
        if($this->vacancies >= 1){
            $this->vacancies -= 1;
            $this->setRegister($fullname, $email);
            echo "<p>Parabéns {$fullname}, vaga garantida!</p>";
        } else {
            echo "<p>Desculpe {$fullname} mas as vagas acabaram</p>";
        }
    }


    /**
     * Set the value of register
     *
     * @return  self
     */ 
    // trazendo a propriedade register  
    protected  function setRegister($fullname, $email)
    {
        $this->register = [
            "name"=>$fullname,
            "email"=>$email
        ];
    }

    public function getEvent()
    {
        return $this->event;
    }

    
    public function getDate()
    {
        return $this->date->format("d/m/Y H:i:s");
    }

   
    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

   
    public function getRegister()
    {
        return $this->register;
    }

   
    public function getVacancies()
    {
        return $this->vacancies;
    }
}