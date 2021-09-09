<?php
// require __DIR__ . '/../../fullstackphp/fsphp.php';
// fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
// fullStackPHPClassSession("strings e multibyte", __LINE__);

// A string multibyte é usada para trabalahr com string de outros países 

$string = "O último show do AC/DC foi incrível!";
echo $string;

echo '<pre>';
var_dump(["String"=>$string],
        ["strlen"=> strlen($string)],
        ["mb_strlen"=> mb_strlen($string)],
        ["substr"=> substr($string, "14")],
        ["mb_substr"=> mb_substr($string, "14")],
        ["strtoupper"=> strtoupper($string)],
        ["mb_strtoupper"=> mb_strtoupper($string)]);
echo '</pre>';


// strlen - função do php para contar o tamanho da string (contando acentos como caracteres)
// mb_strlen - função do php para contar o tamanho da string (sem contar acentos como caracteres extras)
// substr faz com que a string comece a partir de determinada posição
// mb_substr faz com que a string comece a partir de determinada posição sem pegar espaço/acentos
// strtoupper faz com que a string seja elevada para CAIXA ALTA
// strtolower faz com que a string seja minúscula
// mb_strtoupper faz com que a string seja elevada CORRETAMENTE (incluindo letras acentuadas) para caixa alta 


echo '<br>';
echo '<hr/>';
/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
// fullStackPHPClassSession("conversão de caixa", __LINE__);


$mbString = $string;
echo '<pre>';
var_dump(["mb_strtoupper"=>mb_strtoupper($mbString)],
         ["mb_strtolower"=>mb_strtolower($mbString)],
         ["mb_convert_case_UPPER"=>mb_convert_case($mbString, mode:MB_CASE_UPPER)],
         ["mb_convert_case_LOWER"=>mb_convert_case($mbString, mode: MB_CASE_LOWER)],
         ["mb_convert_case_TITLE"=>mb_convert_case($mbString, mode: MB_CASE_TITLE)],
         );
echo '</pre>';

// ["mb_convert_case_UPPER"=>mb_convert_case($mbString, mode:MB_CASE_UPPER)], --> Transforma a string em caixa alta
// ["mb_convert_case_TITLE"=>mb_convert_case($mbString, mode: MB_CASE_TITLE)], --> Transforma a primeira letra da string maiuscula



echo '<br>';
echo '<hr/>';
/**
 * [ substituição ] multibyte and replace
 */
// fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString . " Fui, iria novamente, e foi épico!";
echo '<pre>';
var_dump(["mb_strlen"=> mb_strlen($mbReplace)],
         ["mb_strpos"=> mb_strpos($mbReplace, needle:",")],
         ["mb_strrpos"=> mb_strrpos($mbReplace, needle:",")],
         ["mb_substr"=> mb_substr($mbReplace, 40 + 2, length: 14)],
         ["mb_strstr"=> mb_strstr($mbReplace, needle:", ", before_needle:true)],
         ["mb_strrchr"=> mb_strrchr($mbReplace, needle:",",before_needle:false)]);
echo '</pre>';


// mb_strlen($mbReplace) --> Indica o tamanho da string
// mb_strpos($mbReplace, needle:",") --> Indica a primeira posição de um caracter pesquisado
// ["mb_strrpos"=> mb_strrpos($mbReplace, needle:",")], --> Indica a ultima posição encontrada do caracter pesquisado
// ["mb_substr"=> mb_substr($mbReplace, 40 + 2, length: 14)], --> Retorna parte de uma string Variável, start (corte de caracteres para começar) e o length para permanecer determinada qtd()
// ["mb_strstr"=> mb_strstr($mbReplace, needle:", ", before_needle:true)], --> Faz o mesmo que substr indicando uma posição para o corte, com before_needle:true ou false
// ["mb_strrchr"=> mb_strrchr($mbReplace, needle:",",before_needle:false)]); --> Encontra a última ocorrência de um caracter na string, com true, fica o mesmo resultado.





$mbStrReplace = $string; 

echo "<p>", $mbStrReplace ,"</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrReplace),"</p>";
// echo "<p>", str_replace(["AC/DC", "eu fui", "ultimo"], "Nirvana", $mbStrReplace),"</p>";
echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrReplace), "</p>";

//  echo "<p>", str_replace(["AC/DC", "incrivel"], ["Nirvana", "ÉPICO!"], $mbStrReplace), "</p>";
  echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICOOO!!"], $mbStrReplace), "</p>";

  // str_replace("AC/DC", "Nirvana", $mbStrReplace) -> O que eu quero substituir, pelo quê e aonde.
  // str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrReplace) --> O que eu quero substituir, pelo quê e onde. (O nirvana show do nirvana foi incrível)


/// DELIMITADOR - CAIXA ALTA SEM ACENTO, ESPAÇO
$article = <<<ROCK
  <article>
   <h3>event</h3>
   <p>desc</p>
  </article>
ROCK;

$articleData = [
"event"=>"Rock in Rio",
"desc"=>$mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);
// str_replace(array_keys($articleData), array_values($articleData), $article); as chaves do article data(event e desc) são pegas e pesquisadas
// em $article, e substituidas ambas por array_values($articleData) que é Rock in rio e $mbreplace




/**
 * [ parse string ] parse_str | mb_parse_str
 */
// fullStackPHPClassSession("parse string", __LINE__);
echo '<br>';
echo '</hr>';
$endPoint = "name=Robson&email=cursos.upinside.com.br";
mb_parse_str($endPoint, $parseEndPoint);

//mb_parse_str --> pega a variável $endpoint e cria-se uma variável $parseEndPoint com os valores parciais de endpoint

echo '<pre>';
var_dump($endPoint,
$parseEndPoint);
echo '</pre>';
// no strlen, os acentos são contados como caracteres
// no multibyte, os acentos não são contados como caracteres

?>