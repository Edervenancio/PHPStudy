<?php
//require __DIR__ . '/../../fullstackphp/fsphp.php';
//fullStackPHPClassName("03.10 - Upload de arquivos");
include __DIR__ . "/form.php";

/* echo "<pre>";
var_dump();
echo "</pre>"; */

/* if(!file_exists($upload) && !is_dir($upload)){
    mkdir($folder, 0755);
}; */

echo "<pre>";
var_dump([
    "filesize" => ini_get("upload_max_filesize)"),
    // checando o máximo permitido para o envio de arquivos
    // checando o maximo permitido para o envio de arquivos nos input
    "postsize" => ini_get("post_max_size")
]);
echo "</pre>";

echo '<br>';
echo '<hr/>';

echo "<pre>";
var_dump(
    filetype(__DIR__ . "/index.php"),

    // checa o tipo de arquivo
    mime_content_type(__DIR__ . "/index.php")
);
echo "</pre>";

$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
// filtrando o input com true or false


// se existir o arquivo && tem que existir (não pode ser vazio, o file no indice name)
if ($_FILES && !empty($_FILES['file']['name'])) {
   $filesUploads = $_FILES["file"];
   // tratando o arquivo com o indice colocado no input do form(entrando no arquivo)
   var_dump($filesUploads);

   // criando uma variável com as extensões de arquivos permitidos
   $allowedTypes = [
       "image/jpg",
       "image/png",
       "application/pdf",
       "image/jpeg"
   ];

   // alterando o nome do arquivo que será recebido com o tempo atual, pegando a extensão com mbstrstr

$newFilename = time() . mb_strstr($filesUploads['name'], ".");
var_dump($newFilename);

// validando o mime type com "type" e comparando com allowedTypes
if(in_array($filesUploads['type'], $allowedTypes)){
    // função que move o arquivo do tmp_name (onde o arq está) para o nosso servidor
    // caso faça com sucesso, retorna true
    // especificando o detino do arquivo
  if(move_uploaded_file($filesUploads['tmp_name'], __DIR__ . "/uploads/{$newFilename}")){
    echo "<p> Arquivo enviado com sucesso</p>";
} else {
    echo "<p>Erro inesperado!</p>";
}} else {
    echo "<p>Erro! Tipo de arquivo inválido e não permitido</p>";
};
   
} else if ($getPost) {
    // se tiver o getpost, quer dizer que o usuario interagiu com o usuario mas nao teve dados
    // pode ter estourado l imite
    echo "O arquivo é muito grande!";
} else {
    if ($_FILES) {
        // se não existir o arquivo - enviou em branco
        echo "<p>Selecione um arquivo antes de enviar </p>";
    };
};



echo "<pre>";
var_dump(scandir(__DIR__ . "/uploads"));
echo "</pre>";




/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
//fullStackPHPClassSession("upload", __LINE__);