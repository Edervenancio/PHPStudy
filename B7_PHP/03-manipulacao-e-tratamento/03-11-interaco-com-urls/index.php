<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.11 - Interação com URLs");

/*
  [ argumentos ] ?[&[&][&]]
 */
//fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1> <a href='index.php'>Clear</a></h1>";

echo "<p> <a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";



$data = [
    "name"=>"Eder",
    "Company"=>"UpInside",
    "mail"=>"Cursos@GMAIL.COM"
];

$arguments = http_build_query($data);

echo "<p> <a href='index.php?{$arguments}'>Args by array</a></p>";

echo "<pre>";
var_dump($_GET);
echo "</pre>";

$object = (object)$data;

echo "<pre>";
var_dump($object, http_build_query($object));
echo "</pre>";



/*
  [ segurança ] get | strip | filters | validation
  [ filter list ] https://php.net/manual/en/filter.filters.php
 */
//fullStackPHPClassSession("segurança", __LINE__);



$datafilter = http_build_query([
    "name"=>"Eder",
    "Company"=>"UpInside",
    "mail"=>"Cursos@GMAIL.COM",
    "site"=>"https://UpInside.com.br",
    "script"=>"<script>alert('Esse é um Javascript')</script>"
]);

echo "<p><a href='index.php?{$datafilter}'>Data Filter</a></p>";

$dataurl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);


if($dataurl){
   if(in_array("", $dataurl)){
       echo "<p>Faltam dados!</p>";
   } else if (empty($dataurl['mail'])){
      echo "<p>Falta o email!</p>";
   } else if (!filter_var($dataurl['mail'], FILTER_VALIDATE_EMAIL)){
       echo "<p>Email inválido!</p>";
   } else {
       echo "<p>Tudo certo!</p>";
   }
} else {
    var_dump(false);
}



parse_str($datafilter, $arrDatafilter);
var_dump($arrDatafilter);

$dataprefilter = http_build_query([
    "name"=>FILTER_SANITIZE_STRING,
    "Company"=>FILTER_SANITIZE_STRING,
    "mail"=>FILTER_VALIDATE_EMAIL,
    "site"=>FILTER_VALIDATE_URL,
    "script"=>FILTER_SANITIZE_EMAIL,
]);

echo "<pre>";
var_dump(filter_var_array($arrDatafilter, $dataprefilter));
echo "</pre>";