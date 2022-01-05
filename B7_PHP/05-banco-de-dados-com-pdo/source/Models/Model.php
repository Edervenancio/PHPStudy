<?php

namespace Source\Models;
use Source\Database\Connect;
use Source\Models\UserModel;

// tudo que é comum, fica na model

// a model não pode ser implementada, somente herdada por outras classes
abstract class Model
{
     // conceito de stateless, as propriedades não vão imlementar as regras de negócios e sim a rotina


    /**
     * @var object|null 
     */
     protected $data;
     // ter todos dados manipulados da classe

     /**
      * @var \PDOException|null
      */
     protected $fail;
     // onde vamos armazenar os erros

    /**
     *
     * @var string|null 
     */
     protected $message;
     // armazenar msg para os usuarios


        // toda vez que atribuir uma propriedade que nao esteja acessivel., sera manipulada e jogada pra camada de data
         

        public function __set($name, $value)
        {
            // quer dizer que ainda não temos um valor atribuido na propriedade data
            if(empty($this->data)){
                // data será um objeto std class
                $this->data = new \stdClass();
            } 
            // caso contrário, mesmo que criar o objeto
            // todos os atributos são std class e estao dentro de data pra ser manipulados
                $this->data->$name = $value;
        }


        // validação
        public function __isset($name)
        {
            // retorna true or false se existir data name
            return isset($this->data->$name);
        }


         // será executado sempre que tentar acessar uma propriedade que nao existe ou está inacessivel

        public function __get($name)
        {
            // se existir o data name ele retorna o próprio, caso contrario, retorna o null
            return($this->data->$name ?? null);
        }
 




     /**

      * @return  object|null
      */ 
     public function data(): ?object
     {
          return $this->data;
     }

     /**
      * @return  \PDOException
      */ 
     public function fail(): ?\PDOException
     {
          return $this->fail;

     }

     

     /**
      * Get the value of message
      *
      * @return  string|null
      */ 
     public function message(): ?string
     {
          return $this->message;
     }


     // metodo pra efetuar o cadastro através do metodo save da UserModel
     // tabela e um array data
     protected function create(string $entity, array $data): ?int
     {

        try{

            $columns = implode(", ", array_keys($data));
            // montando a query com o implode
            // construindo a coluna
            // a query deve ser: INSERT INTO users VALUES first_name, last_name, email, docunment
            // o array keys tem os dados que são inseridos
            $values = ":" . implode(", :", array_keys($data));

            $stmt = Connect::getInstance()->prepare("INSERT INTO {$entity} ({$columns}) VALUES ({$values})");

            $stmt->execute($this->filter($data));
            // filtrando os dados registrados

            // retornando o ultimo id inserido
            return Connect::getInstance()->lastInsertId();

        } catch(\PDOException $exception){
            $this->fail = $exception;
            return null;
        }


        
     }


     /**
     * @param string $select
     * @param string|null $params
     * @return null|\PDOStatement
     */

    // query para ser executada, params que pode ser igual a nulo(se não seleiconar nenhum parametro, seleciona todos, caso contrario, pode filtrar)
    protected function read(string $select, string $params = null): ?\PDOStatement
    {
    //echo '<pre>';
  //  var_dump($select);
    //echo '</pre>';

      //  echo '<pre>';
       // var_dump($params);
        //echo '</pre>';
        // criando o array para parse_str
         $paramsArray = [];
        try {
            // preparando o select para ser executado posteriormente
            $stmt = Connect::getInstance()->prepare($select);
            // o bind interpreta como string por padrão, e um limit string 3 daria errado na consulta
            if ($params) {
                // if ($params) -> quer dizer que atribuiu parametros, quer fazer um filtro na consulta
                // quer dizr que atribui parametros, quer fazer um filtro na consulta
                // convertendo a string em variável, esse valor vem do $id
                // caso houver um var_Dump acima do parse string, o $id será = "1", abaixo, será 1
                // o parse str faz com que o conteúdo de um array se torne uma variável int exemplo: 
                parse_str($params, $paramsArray);
                // transformando o indice "1" em INT com foreach
                foreach ($paramsArray as $key => $value) {
                    // params array traansfere o valor para key que se torna id e em seguida, recebe o valor 1
                    // array -> "id" -> 1 
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    // $type recebe o valor 1 após a checam de se é numerico ou não o $value, o que e verdadeiro. recebendo PDO::PARAM_INT
                    // $stmt executa o bind value, com a $key sendo column de cada tabela(nome, email a ser procura),
                    // o $value sendo o id/forma de busca(condição:)
                    $stmt->bindValue(":{$key}", $value, $type);


                }
            }

            $stmt->execute();
            return $stmt;
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            // exportar o erro como um todo, para que possa validar
            // todos os metodos precisam ter tipagem pra saber exatamente o comportamento 
            return null;
        }
     }

     protected function update(string $entity, array $data, string $terms, string $params): ?int
     {

        // entity = user
        // data = array de dados que vao ser atualizados no registro
        // terms = condições de campo (id = id) que quer passar através de um link
        // params -> id 
         try {
             $dateSet = [];
             
             // Para que possar montar o set
             foreach ($data as $bind => $value) {
                 // setando os valores de dataset em bind
                 $dateSet[] = "{$bind} = :{$bind}";
             }
             // criando a query de update
             $dateSet = implode(", ", $dateSet);
             $paramsArray = [];
             // transforma a string em variaveis
             parse_str($params, $paramsArray);
             $stmt = Connect::getInstance()->prepare("UPDATE {$entity} SET {$dateSet} WHERE {$terms}");
             // executando o update no array_merge que funciona mesclando os dois arrays e filtrnado
             $stmt->execute($this->filter(array_merge($data, $paramsArray)));
             // caso eu atualize mais de uma linha, vou retornar a qtd de linhas. se for uma, retorna uma.
             // se atualizar 0 linhas, mas mesmo assim o comando tiver sucesso, vou retornar 1 pq vai ter 0 linhas atualizadas
             // na aplicação nao é necessario saber se atualizaram linhas, somente se o programa rodou de fato
             return ($stmt->rowCount() ?? 1);
         } catch (\PDOException $exception) {
             $this->fail = $exception;
             return null;
         }
        }

     protected function delet(string $entity, string $terms, string $params): ?int
     {

        try {
            $stmt = COnnect::getInstance()->prepare("DELETE FROM {$entity} WHERE {$terms}");
            $paramsArray = [];
            parse_str($params, $paramsArray);
            return ($stmt->rowCount() ?? 1);
        } catch(\PDOException $exception){
            $this->fail = $exception;
            return null;
        }
     }


     /**
     * @return null|array
     */

     // elimina os campos que não podem ser manipulados
    protected function safe(): ?array
    { 
        // para que possa registrar os dados, é necessário que sejam um array
      $safe = (array)$this->data;
      // Puxando a variável safe da classe filha UserModel como $unset
      // atribuindo os valores de $safe para $unset
        foreach(UserModel::$safe as $unset){
          // removendo os valores/indices de em $safe que contém os valores de $unset (id, created_at, updated_at....)
            unset($safe[$unset]);
        }
        // retornando o valor de $safe com os dados corretos
        return $safe;
    }

      // filtrar os dados antes de mandar para o banco (sanitize...)
      // realiza manutenção dos dadoss
      private function filter(array $data): ?array
      {
        
        $filter = [];

        foreach($data as $key => $value){
        
            $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
        }

        return $filter;

      }

      
}


