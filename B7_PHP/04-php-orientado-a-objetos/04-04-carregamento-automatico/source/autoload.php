<?php

spl_autoload_register(function ($class){
    $prefix = "Source\\";
    //  namespace source localizado no \/
    // diretorio raiz
    $baseDir = __DIR__ . "/";
    $len = strlen($prefix);
    //contando o prefix

    
    //echo "<pre>";
   // var_dump($class);
    //echo "</pre>";


    // strncmp = combinação binária entre o prefix (source), class da função e o length

    // se o prefix for != class dentro dos primeiros caracteres(source\), vai retornar um e nao pode continuar.
    if(strncmp($prefix, $class, $len) != 0){
        return;
        // cancela
    }


    // substr faz com que a string comece a partir de determinada posição, no caso, a partir da 7.

    $relativeClass = substr($class, $len);



    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
    //criando o arquvio, concatenando e trocando o \ por / a partir da posiçao 7 com .php


    // se o arquivo existir, retornar e requisitar
    if(file_exists($file)){
        require $file;
    };

 /*
    echo "<pre>";
    var_dump($file);
    echo "</pre>";

    echo "<pre>";
    var_dump($relativeClass);
    echo "</pre>";

    echo "<pre>"; 
    var_dump($prefix, $baseDir, $class);
    echo "</pre>"; */
});

