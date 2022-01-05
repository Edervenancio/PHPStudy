<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;
use Source\Bank\Account;

class AccountSaving extends Account
{

    private $interest; 

    public function __construct($branch, $account, User $client, $balance)
    {
        parent::__construct($branch, $account, $client, $balance);
        $this->interest = 0.006;
    }

    public function deposit($value)
    {
        // metodo concreto da forma abstraida em account.
        // função feita para o depósito. 
        $this->balance = $value + ($value * $this->interest);
        Trigger::show("Depósito de {$this->toBrl($value)} realizado com sucesso!", Trigger::ACCEPT);
    }

    public function withdrawal($value)
    {
        // metodo concreto da forma abstraida em account.
        // função feita para o saque. 
        if($this->balance >= $value){
            // abs transforma os numeros negativos sempre em positivos, para o calculo correto
            $this->balance -= abs($value);
            Trigger::show("Saque de {$this->toBrl($value)} realizado com sucesso", Trigger::ERROR);
        } else {
            Trigger::show("Saldo insuficiente. Você tem {$this->toBrl($this->balance)}");
        }
    }

}
