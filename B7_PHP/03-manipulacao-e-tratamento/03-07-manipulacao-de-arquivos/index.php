<?php
/* 
/*require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
//fullStackPHPClassSession("verificação", __LINE__);


$file = __DIR__ . "/file.txt";
// dando um diretório para a variável e seu arquivo
// checando se o arquivo existe e se é um arquivo
if(file_exists($file) && is_file($file)){
    echo "<p>Existe!</p>";
} else {
    echo "<p>Não existe</p>";
};

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
//fullStackPHPClassSession("leitura e gravação", __LINE__);

// negação de se o arquivo existe ou se é um arquivo

if(!file_exists($file) || !is_file($file)){
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01".PHP_EOL);
    fwrite($fileOpen, "Linha 02".PHP_EOL);
    fwrite($fileOpen, "Linha 03".PHP_EOL);
    fwrite($fileOpen, "Lorem ipsum aushfsudahfdsaihufdshiufsdfasd".PHP_EOL);
    fclose($fileOpen);
    // W - > abrindo para leitura e gravação
    // fopen = criação do arquivo 
    // fwrite = escrita no arquivo ($variavel, "texto", "quebra de linha");
    // "fclose = fechamento da escrita do arquivo
} else{
    echo "<pre>";
    var_dump(file($file),
             pathinfo($file));
    echo "</pre>";
    // file -> lê o arquivo (conteúdo)
    // path info -> mostra a localização do arquivo
};

echo "<p>", file($file)[3] ,"</p>";
// checando o que está escrito na string $file (arquivo) na posição 3 


// abrindo o arquivo para READ
$open = fopen($file, "r");



// Feof Testa o fim do arquivo em um ponteiro de arquivo
//Enquanto não chegar ao fim do arquivo
while(!feof($open)){
    echo "<p>", fgets($open),"</p>";
    // percorrendo o arquivo e o lendo
}

fclose($open);



// [ get, put content ] file_get_contents | file_put_contents
 

$getContentes = __DIR__ . "/teste2.txt";
file_get_contents($getContentes);
// o file get content só trabalha com o arquivo já criado.

if(file_exists($getContentes) && is_file($getContentes)){
    echo file_get_contents($getContentes);
} else {
     $data = "<article><h1>Robson</h1><p>Ceo Upinside<br> curso@UpInside@hotmail.com</p></article>";
     file_put_contents($getContentes, $data);
     // colocando conteúdo na variável get contents, vai cair no else pois não há o arquivo teste2 criado pelo getcontents ($variável, $conteudo)
     //file_put_contents insere conteúdo na primeira variável a partir do segundo slot.
     echo  file_get_contents($getContentes);
};

//fullStackPHPClassSession("get, put content", __LINE__);
 
//unlink($getContentes);
// unlink($file);

if(file_exists(__DIR__ . "/teste3.txt") && is_file(__DIR__ . "/teste3.txt")){
    unlink(__DIR__ . "/teste3.txt");
    // exclui o arquivo
};