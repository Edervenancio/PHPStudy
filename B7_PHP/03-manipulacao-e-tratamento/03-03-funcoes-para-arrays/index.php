<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
// fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
// fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "After Bridge",
];

$assoc = [
    "band_1"=>"AC/DC",
    "band_2"=>"Nirvana",
    "band_3"=>"After Bridge"
];

array_unshift($index, "Teste");
// O Array unshift adiciona um elemento no começo do array.

$assoc = ["band_4"=>"Pearl Jam",
 "band_5"=>""] + $assoc;



 array_push($index, "");
 $assoc = $assoc + ["band_6"=>""];

 array_shift($index);
 array_shift($assoc);
 // array_shift remove o primeiro elemento de um array

 array_pop($index);
 array_pop($assoc);
 // array+pop remove o último elemento de um array

 array_unshift($assoc, "");
$index = array_filter($index);
$assoc = array_filter($assoc);


echo "<h1>ARRAY ASSOC</h1>";
echo "<pre>";
var_dump($assoc);
echo "</pre>";
echo '<br> <hr/>';

echo "<h1> ARRAY index</h1>";
echo "<pre>";
var_dump($index);
echo "</pre>";



/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
// fullStackPHPClassSession("ordenação", __LINE__);

echo "<hr/>";
echo "<hr/>";
echo "<br>";
echo "<br>";
array_push($index, "Pearl Jam");
$index = array_reverse($index);
$assoc = array_reverse($assoc);
//array_reverse reverte a ordem dos elementos nos arrays

asort($index);
// Ordena pelo valor, 1,2,3.. A..B.C..
asort($assoc);

ksort($index);
// Organiza pela ordem dos índices

krsort($index);
// Orgaiza ao contrário pela ordem dos índices

sort($index);
// É ordenado pelo valor e seus indíces são reindexados.

rsort($index);
// É organizado ao contrário e seus indíces são reindexados.

echo "<h1>ARRAY ASSOC</h1>";
echo "<pre>";
var_dump($assoc);
echo "</pre>";
echo '<br> <hr/>';

echo "<h1> ARRAY index</h1>";
echo "<pre>";
var_dump($index);
echo "</pre>";


/*
 * [ verificação ]  keys | values | in | explode
 */
// fullStackPHPClassSession("verificação", __LINE__);

echo '<br>';
echo '<br>';
echo '<hr/>';
echo '<hr/>';

echo "<pre>";
var_dump([array_keys($assoc),
         array_values($assoc)]);
echo "</pre>";

if(in_array( "AC/DC", ($assoc))){
    echo "<p> Cause i'm Back!</p>";
    // Verifica o valor e uma chave dentro de um array. Needle -> O que quero descobrir
    // Verifica a existência de AC/DC
    // O segundo parâmetro é o array
}

$arrToString = implode(", ",$assoc);
echo "<p>Eu curto {$arrToString} e muitas outras! </p>";
echo "<p>{$arrToString}</p>";
echo '<hr/>';
echo '<br>';
echo '<br>';

echo "<pre>";
echo var_dump(explode(", ", $arrToString));
echo "</pre>";

/**
 * [ exemplo prático ] um template view | implode
 */

$profile = ["name"=>"Robson",
"company"=>"UpInside",
"mail"=>"Cursos@PpInside.com.br"];

$template = <<<TPL
  <article>
  <h1>{{name}}</h1>
  <p>{{company}}<br>
   <a href="mailto:{{mail}}" title="Enviar email para {{name}}">Enviar email</a></p>
  </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";
    echo $replaces;

    var_dump(explode("&",$replaces));

    echo str_replace(
        explode("&", $replaces),
        array_values($profile),
        $template
    ); 

// fullStackPHPClassSession("exemplo prático", __LINE__)