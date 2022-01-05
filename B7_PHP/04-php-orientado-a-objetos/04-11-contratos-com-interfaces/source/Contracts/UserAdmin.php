<?php

namespace Source\Contracts;

// Herdando a classe User e implemetando os termos de UserInterface e UserErrorInterface
Class UserAdmin extends User implements UserInterface, UserErrorInterface
{
    private $level;
    private $error;

    public function __construct($firstName, $lastName, $email)
    {
        parent::__construct($firstName, $lastName, $email);
        $this->level = 10;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getError($error)
    {
        return $this->error;
    }



}