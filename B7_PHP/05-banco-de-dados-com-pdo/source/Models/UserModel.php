<?php

namespace Source\Models;

// tudo que é regra de negocio do usuario, fica no usermodel
// no momento que extends, a model recbee um abstract

class UserModel extends Model
{
    /**
     *
     * @var array $safe no update or create
     */
    // valores que não podem ser manipulados 
    protected static $safe = [
        "id",
        "created_at",
        "updated_at"
    ];

    /** @var string entity database table  */
    // a tabela do qual o modelo vai trabalhar
    protected static $entity = "users";

    // cuida da construção de dados necessários para cadastrar o usuario
    // pode ser user model ou null, em determinado momento o bootstrap pode analisar e verificar dados pra garantir a consistencias,pode retornar null caso nao ocorre
    public function bootstrap(string $firstName, string $lastName, string $email, string $document = null): ?UserModel
    {
        $this->first_name = $firstName;
        $this->last_name = $lastName;
        $this->email = $email;
        $this->document = $document;

        return $this;
        // quando retorna o proprio objeto, garante que o registro continue ativo e possa continuar manipulando
    }

    
     //  $user = $model->load(1, "first_name") -> o primeiro argumento é o $id, $paramsn e o segundo é a coluna
    public function load(int $id, string $columns = "*"): ?UserModel
    {
        // trazendo as colunas, se nao houver valor, trará todas, onde será feito o select e o id com o bind value
        // $this->read($select)
        // no params, o argumento id será igual o argumento id que vem de nosso me´todo
        // o user semrpe será self::entity
        $load = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE id = :id", "id={$id}");
        // o argumento id vem através do método
        if($this->fail() || !$load->rowCount()){
            // ou deu erro, ou não obteve valores através do id
            $this->message = "Usuário não encontrado para o id informado";
            // a classe message recebe a mesagem
            return null;
            // retornando null
        }
        // ativando os métodos da classe
        // quando fazemos isso, trabalhamos com ctive record
        // temos o s metodos nos usuario
        // estamos garantindo o retorno de usermodel ou null
            return $load->fetchObject(__CLASS__);
        
        
    }


    // buscar o usuario pelo email
    public function find($email, string $columns = "*"): ?UserModel
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$entity . " WHERE email = :email", "email={$email}");
        if($this->fail() || !$find->rowCount()){
            $this->message = "Usuário não encontrado para o id informado";
            return null;
        }
            return $find->fetchObject(__CLASS__);
        
    }


    // busca todos os resultados, paginar..
    public function all(int $limit = 30, int $offset = 0, string $columns = "*"): ?array
    {
        // em vez de um where, vamos ter um limit:limit e um offset :offeset
        $all = $this->read("SELECT {$columns} FROM " . self::$entity . " LIMIT :limit OFFSET :offset", "limit={$limit}&offset={$offset}");
        // query deo select
        if($this->fail() || !$all->rowCount()){
            $this->message = "Sua consulta não retornou usuários";
            return null;
        }
            return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
       
    }


    // se responsabiliza por cadastrar e salvar o usuário na base
    public function save(): ?UserModel
    {

        if(!$this->required()){
            return null;
        }

            // User update
            // Vai tentar atualizar os dados
            // tentnado entender se há um registro já informado, que não este.

           if(!empty($this->id)){
             $userId = $this->id;
             // pesquisando outros usuários QUE NÃO ESSE, mas tenham o mesmo email.
             $email = $this->read("SELECT id FROM users WHERE email = :email AND id != :id",
             "email={$this->email}&id={$userId}");
             // tentando verificar se o email já existe no database
                if($email->rowCount()){
                    $this->message = "O email informado já está cadastrado";
                    return null;
                }
                // atualizando os dados
                $this->update(self::$entity, $this->safe(), "id = :id", "id={$userId}");
                if($this->fail()){
                    $this->message = "Erro ao atualizar. Verifique os dados";
                } 

                $this->message = "Dados atualizados com sucesso";

            }

            // User create
            // Vai tentar cadastrar
           if(empty($this->id)){
            if($this->find($this->email)){
                $this->message = "O email informado já está cadastrado";
                return null;
            } 

            // o id do usuario será o entity + o metodo pra transformar o objeto em um array e eliminar os campos que não podem ser manipulados
            $userId = $this->create(self::$entity, $this->safe());
            if($this->fail()){
                $this->message = "Erro ao cadastrar. Verifique os dados";
            }
                $this->message = "Cadastro realizado com sucesso!";
        }
        $this->data = $this->read("SELECT * FROM users WHERE id = :id", "id={$userId}")->fetch();
        return $this;
    }


    // deletar o usuário
    public function destroy(): ?UserModel
    {
        if(!empty($this->id)){
            $this->delet(self::$entity, "id = :id", "id={$this->id}");
        }

        if ($this->fail()){
            $this->message = "Não foi possivel remover o usuário";
        } return null;

        $this->message = "Usuário removido com sucesso";
        // $this->data = null;
        return $this;

    }

    
    private function required(): bool
    {

        if(empty($this->first_name) || empty($this->last_name) || empty($this->email)){
            $this->message = "Nome, sobrenome e email são obrigatórios";
            return false;
        } 

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->message = "O email informado não parece válido";
            return false;
        }

        return true;
         

    }
    


}