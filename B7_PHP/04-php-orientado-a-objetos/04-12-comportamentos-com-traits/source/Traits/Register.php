<?php

namespace Source\Traits;

class Register
{

    // Importando todos comportamentos e propriedades do trait pra toda classe
    // O OBJETO VAI TER ACESSO A TODOS METODOS
    use UserTrait;
    use AddressTrait;

    public function __construct(User $user, Address $address)
     {
         // puxando as propriedades set user e setadress(localizadas nos traits), dando valor a $user e $address
        $this->setUser($user);
        $this->setAddress($address);
        $this->save();
     }

     public function save()
     {
         $this->user->id = 232;
         $this->address->user_id = $this->user->id;
     }
}
