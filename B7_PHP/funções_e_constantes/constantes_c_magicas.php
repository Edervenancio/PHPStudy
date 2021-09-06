<?php

// as consts devem estar separadas

use Source\MyClass;

define("COURSE","fullstack php");
echo COURSE;
// define = runtime da aplicação - enquanto está rodando
const AUTHOR = "Robson";
// COMPILE TIME = Ocorre antes da execução, por isso, não se pode usar a const em uma execução

$formation = true;

if($formation){
    define("COURSE_TYPE","Formação");
    //const = "const" não é possível ser executado
} else {
    define("COURSE_TYPE","Curso");
};

echo "<p>COURSE_TYPE COURSE AUTHOR</p>";
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>";
echo "<p>", COURSE_TYPE, " ", COURSE, " " ,AUTHOR, "</p>";
echo "<p>" . COURSE_TYPE . " " . COURSE . " " . AUTHOR . "</p>";

echo '<br>';
echo '<hr/>';

class Config{
  const USER = "ROOT";
  const HOST = "LocalHost";
};

echo "<p>", Config::HOST, "</p>";
// var_dump(get_defined_constants(true)["user"]);
echo '<br>';
echo '<hr/>';

// constantes mágicas
echo "<pre>";
var_dump([
    
    "Linha = " . __LINE__,
    "Arquivo = ". __FILE__,
    "Diretório = ".__DIR__
]);
echo "</pre>";

echo '<br>';
echo '<hr/>';

function fullstackphp(){
    return __FUNCTION__;
};

var_dump(fullstackphp());
echo '<hr/>';

trait MyTrait{
    public $name = __TRAIT__;
};


class FsPhp{
 use MyTrait;
 public $classname = __CLASS__;
};

var_dump(new FsPhp());

require __DIR__ . "./Myclass.php";
var_dump(new MyClass());
?>

