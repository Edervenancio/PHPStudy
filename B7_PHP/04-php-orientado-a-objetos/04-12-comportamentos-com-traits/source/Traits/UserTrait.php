<?php

namespace Source\Traits;

trait UserTrait
{

    private $user;

    



    /**
     * @return User
     */ 
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return mixed User
     */ 
        // Injetando a classe User no setAddress

    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }
}