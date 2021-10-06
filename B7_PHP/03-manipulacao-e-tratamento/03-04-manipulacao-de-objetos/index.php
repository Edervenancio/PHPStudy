<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
//fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name"=>"Robson",
    "company"=>"Upinside",
    "email"=>"Cursos@upinside.com.br"
];

// array normal, associativo.

$objProfile = (object)$arrProfile;
// Transformando um array em objeto


//echo "<pre>";
//var_dump($arrProfile);
// echo "</pre>"

//echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']} </p>";
//echo "<p>{$objProfile['name']} trabalha na {$arrProfile['company']} </p>";
// Acessando os índices de um array e um objeto


$ceo = $objProfile;

unset($ceo->company);
// Eliminar um campo do objeto

echo "<pre>";
var_dump($ceo);
echo "</pre>";

$company = new stdClass();
// instanciando um objeto da classe std
$company->company = "UpInside";
$company->ceo = $ceo;
$company->manager = new stdClass();
// objeto multinível
$company->manager->name = "Kaue";
$company->manager->email = "cursos@upinside.com.br";

echo "<hr>";

echo "<pre>";
var_dump($company);
echo "</pre>";

echo '<br>';
echo '<br>';

/**
 * [ análise ] class | objetcs | instances
 */
//fullStackPHPClassSession("análise", __LINE__);

echo '<hr/>';

$date = new DateTime();

echo "<pre>"; 
var_dump(["class"=>get_class($date),
          "methods"=>get_class_methods($date),
          "vars"=>get_object_vars($date),
          "parent"=>get_parent_class($date),
          "subclass=>"=>is_subclass_of($date, "DateTime")]);
echo "</pre>";

echo '<br>';
echo '<br>';
echo "<hr/>";
$expetion = new PDOException();

echo "<pre>"; 
var_dump(["class"=>get_class($expetion),
          "methods"=>get_class_methods($expetion),
          "vars"=>get_object_vars($expetion),
          "parent"=>get_parent_class($expetion),
          "subclass=>"=>is_subclass_of($expetion, "Exception")]);
echo "</pre>";


?>