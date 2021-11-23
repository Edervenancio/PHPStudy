<?php

namespace Source\Interpretation;

class Product {

    public $name;
    private $price;
    private $data;
// tudo que não tiver mapeado, será mapeado através desse atributo 

    public function __set($name, $value) {
        // automaticamente traz o name e o value, que é o que está sendo executado, para cair dentro dessa função
        $this->notFound(__FUNCTION__, $name);
        // executando a função notfound, o nome da propriedade e a função responsável(__set e title/value)
        $this->data[$name] = $value;
        // armazenando aquilo que não é permitido de fato na classe, ou que não está mapeado. O title e o value está armazenado.
        // pode ser armazenado para uso posterior (eliminando ou mapeando para que possa ter responsabilidade sobre os mesmos)
    }


    public function __get($name) {
        // Executado automaticamente quando se tenta obter uma propriedade inacessível
        // há apenas o name
        if (!empty($this->data[$name])) {
            // se houver a propriedade não mapeada, mas dentro da data, será exibida. (title e company)
            return $this->data[$name];
        } else {
            $this->notFound(__FUNCTION__, $name);
            // executando a função notfound, o nome da propriedade e a função responsável(__get e title/company)
        }
    }


    public function __isset($name) {
        // executando a função notfound, o nome da propriedade e a função responsável (_isset, address, phone)
        $this->notFound(__FUNCTION__, $name);
    }

    public function __call($name, $arguments) {
        // executando a função notfound, o nome da propriedade e a função responsável (__call, setPrice)
        $this->notFound(__FUNCTION__, $name);
        echo "<pre>";
        var_dump($arguments);
        // dados que existem na função
        echo "</pre>";
    }

    public function __toString() {
        return "<p>Esse é um objeto da classe" . __CLASS__ . "</p>";
    }

    public function __unset($name)
    {
        // executando a função notfound, o nome da propriedade e a função responsável(_unset, price, data, title)
        echo "<p>" . __FUNCTION__ . ": Acesso negado a propriedade {$name}" . E_USER_ERROR . "</p>";
    }


    // sempre vai receber um name e um price (o que está sendo manipulado)
    public function handler($name, $price) {

        $this->name = $name;
        //automaticamente converte os valores jogados para REAL BRL
        $this->price = number_format($price, "2", ".", ",");
    }

    private function notFound($method, $name) {
        // usar o método para mapear as requisições mágicas
        // método sendo utilizado (set), NOME DA PROPRIEDADE (TITLE, VALUE) e onde (Source\Interpretation\Product)
        echo "<p>{$method}: A propriedade {$name} não existe em " . __CLASS__ . "</p>";
    }
};
