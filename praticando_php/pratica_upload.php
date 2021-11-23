<?php


include __DIR__ . "/form_upload.php";

echo "<p>Valores de envio maximo de arquivo</p>";

echo "<pre>";
var_dump([
    "filesize" => ini_get("upload_max_filesize"),
    "postsize" => ini_get("post_max_size")
]);
echo "</pre>";

//$limite = ini_get("post_max_size");

echo "<p>Tipos de arquivos</p>";
echo "<pre>";
var_dump([
    filetype(__DIR__ . "/pratica_upload.php"),
    mime_content_type(__DIR__ . "/pratica_upload.php")
]);
echo "</pre>";

$getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
// quando recebe um envio maior que o possível, o post = true mostra que existiu a postagem, mesmo que não interpretrado o tamanho
// se é um arquivo e NÃO pode ser vazio
// validando a existência com !empty de $_FILES com file no indice name
/*

if ($_FILES && !empty($_FILES['file']['name'])) {
    $fileUpload = $_FILES["file"];
    var_dump($fileUpload);
} else if ($getPost) {
    echo "<p>O arquivo é grande de mais.  </p>";
} else {
    if ($_FILES) {
        echo "<p>Não há um arquivo!</p>";
    }
};


echo "<pre>";
var_dump(scandir(__DIR__ . "/uploads"));
echo "</pre>";
*/


if($_FILES && !empty($_FILES['file']['name'])){
    $arqEnviado = $_FILES['file'];
    $tiposPermitidos = [
        "image/jpg"
    ];

    $novoNome = rand(1, 100) . mb_strstr($arqEnviado['name'], ".");

    if(in_array($arqEnviado['type'], $tiposPermitidos)){

        if(move_uploaded_file($arqEnviado['tmp_name'], __DIR__ . "/uploads/{$novonome}")){
            echo "<p>Arquivo enviado com sucesso!</p>";
        } else {
            echo "<p>Ocorreu um erro inesperado.</p>";
        } 
    } else {
      "<p>Type de arquivo permitido inválido!</p>";
    };


} else if ($getPost){
  echo "O arquivo é grande de mais";
}  else {
    if($_FILES){
        echo "<p>Não há um arquivo.</p>";
    };
};