<?php

namespace Source\Contracts;

class Login 
{
    private $logged;


    /** 
     * @param User $user
     * @return User
     */ 

    // Para fazer o login, é necessário do objeto usuário.
    public function loginUser(User $user): User
    {
        $this->logged = $user;
        return $this->logged;
    }

    //Para fazer o login, estamos solicitando um objeto da user Admin.

    public function loginAdmin(UserAdmin $user): UserAdmin
    {
        $this->logged = $user;
        return $this->logged;
    }


    // Login geral, pode usar em qualquer parte do sistema
    // Qualquer objeto que implemente a UserInterface(tenha os termos em seus métodos implementados), poderá implementar essa interface
    // Fazer login no sistema
    public function login(UserInterface $user): UserInterface
    {
        $this->logged = $user;
        return $this->logged;
    }
}