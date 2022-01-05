<?php

namespace Source\Bank;

use Source\App\Trigger;
use Source\App\User;


// toda classe por padrão, é uma classe concreta
// quando temos uma classe abstrata, ela serve como MODELO de implementação
// serve para implementar outras classes, e não o objeto diretamente
abstract class Account {

    //devem ser protected, afinal, dentro das classes filhas, essas propriedades podem ser manipuladas
    // contas podem ser diferentes, agencias...
    protected $branch;
    protected $account;
    protected $client;
    protected $balance;


    // o construtor não pode ser manipulado pelo objeto, ja que uma conta não pode ser manipulada na aplicação
    protected function __construct($branch, $account, User $client, $balance) 
    {
        $this->branch = $branch;
        $this->account = $account;
        $this->client = $client;
        $this->balance = $balance;
    }

    public function extract()
    {
        // função para obter o extrato bancário
        // Se o balance for maior ou igual a um, o saldo será positivo, caso contrário, negativo
        $extract = ($this->balance >= 1 ? Trigger::ACCEPT : Trigger::ERROR);
        Trigger::show("Extrato: Saldo Atual: {$this->toBrl($this->balance)}", $extract);
    }

    // protected pois precisar fornecer o método para as filhas
    protected function toBrl($value)
    {
        //transformando os valores no molde de Reais
        return "R$ " . number_format($value, "2", ",", ".");
    }

    abstract public function deposit($value);
    
        // os metodos abstrados, invertem a abstração
        // a classe filha precisa implementa-la. Na classe filha precisa ser concreta
        // em toda implementação, é necessario obrigatoriamente um metodo concreto com value
    

    abstract public function withdrawal($value);
    



}
