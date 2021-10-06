<?php



$texto = __DIR__ . "/texto.text";


if(file_exists($texto) || is_file($texto)){
    echo "O arquivo existe";
} else {
    $texto2 = fopen($texto, "w");
    fwrite($texto2, "A".PHP_EOL);
    fwrite($texto2, "B".PHP_EOL);
    fwrite($texto2, "C".PHP_EOL);
};

echo "<p>", file($texto)[1] ,"</p>";


$abertura = fopen($texto, "r");

while(!feof($abertura)){
    echo "<p>", fgets($abertura) ,"</p>";
}

fclose($abertura);


unlink(__DIR__ . "/texto.text");
?>

