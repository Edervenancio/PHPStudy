<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.08 - Gestão de diretórios");

///*
// * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
//fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

// dando o endereço para o diretorio ser criado
$folder = __DIR__ . "/uploads";
// se o arquivo existe e se é um diretóiro
if(!file_exists($folder) || !is_dir($folder)){
mkdir($folder, 0755);
// criando o diretórioW
} else {
 echo "<pre>";
 var_dump(scandir($folder));
 echo "</pre>";
};
/*
//  [ copiar e renomear ] copy | rename
 */
//fullStackPHPClassSession("copiar e renomear", __LINE__);

$file = __DIR__ . "/file.txt";
// criando o arquivo file

echo "<pre>";
var_dump(pathinfo($file),
        // local onde o file está
         scandir($folder),
         // o que tem no folder
         scandir(__DIR__));
         // o que tem no diretório
echo "</pre>";


if(!file_exists($file) || !is_file($file)){
    fopen($file, "w");
    // criando arquivo $file
} else {
//    var_dump(filemtime($file), filemtime(__DIR__ . "/uploads/file.txt"));

//    copy($file, $folder . "/" . basename($file));
//    copiando o arquivo de file para uploads com o nome do arquivo. Basename pega o nome do arquivo
//    checando as alterações na cópia do arquivo e vendo qual está reescrevendo.
//    rename(__DIR__ . "/uploads/file.txt", __DIR__ . "/uploads/".time() . "." . pathinfo($file)['extension']);
//    renomeando o arquivo passando o diretório, concatenando com o tempo, pegando seu pathinfo(quem está renomeando) e o índice que será a extensão (txt);
rename($file, __DIR__ . "/uploads/".time(). "." . pathinfo($file)['extension']);
};





//  [ remover e deletar ] unlink | rmdir

//fullStackPHPClassSession("remover e deletar", __LINE__);

//rmdir(__DIR__ . "/remove");
// apagando o diretósio (precisa estar vazio)

$dirRemove = __DIR__ . "/remove";

$dirFiles = array_diff(scandir($dirRemove), ['.','..']);
// array_diff -> checa as diferença de indíce
//scandir -> o que tem no arquivo
$dirCount = count($dirFiles);
// quantos arquivos tem na pasta
echo "<pre>";
var_dump($dirFiles, $dirCount);
echo "</pre>";

if($dirCount >= 1){
 echo "<h1>Clear...</h1>";
 // se dir count for maior que 1, tem que limpar
 // transformando os itens de dirRemove em fileitem
 foreach(scandir($dirRemove) as $fileItem){
     //criando o fileitem com os elementos de dirsmove com o scan dir
     $fileItem = __DIR__ . "/remove/{$fileItem}";
     // determinando o caminho dos itens
     if(file_exists($fileItem) && is_file($fileItem))
     unlink($fileItem);
     // excluir o item
 };
} else {
    rmdir($dirRemove);
};


/* 
if ($dirCount >= 1) {
    echo "<h2>Clear...</h2>";
    foreach (scandir($dirRemove) as $fileItem) {
        $fileItem = __DIR__ . "/remove/{$fileItem}";
        if (file_exists($fileItem) && is_file($fileItem)) {
            unlink($fileItem);
        }
    }
} else {
    rmdir($dirRemove);
}
*/

