<?php

namespace Source\Contracts;


// Dentro do escopo de uma interface, não temos propriedades e implementações concretas
// Apenas assinaturas do que uma classe deve implementar de forma concreta, ou o que o objeto deve implementar para realizar comunicação com outra classe


interface UserInterface
{
    // qualquer classe que implemente esse contrato, é obrigado a implementar essa assinatura
    // o corpo da interface são termos de uso


    // A implementação também vale pelos valores, como as variavels dentro da construct. 
    //public function __construct($firstName, $lastName, $email);

    //public function setEmail($email);

    public function getFirstname();

    public function getLastname();

    public function getEmail();
}