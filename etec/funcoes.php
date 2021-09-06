<?php
// função que separa os elemtnso de uma string usando um separado
// $separador - caractere ou string
// $produto - string
// return array (vetor)

// function separarElementos($separados='',$elementos='')_


/* $nome = "Etec";
$cidade = "Pinhal";
$inteiro = 100;
printf("%s %s", $nome, $cidade);
printf(" %d",$inteiro);

echo "<br>{$nome} {$cidade}<br>{$inteiro}"; */


include_once 'funcoes.php'; //inclui o arquivo
$vetor = separarProdutos(';','CPU;Memória;HD;Monitor');

// echo '<pre>';
// print_r($vetor); //exibicação simples
// var_dump($vetor) - exibicação detalhada
// echo '</pre>';
/////////////////////////////////////////////////////////////////
function imprimirVetor($vetor){
//for($i=0;$i<count($vetor); $i++){
  //echo $vetor[$i] . '<br>';
//};

foreach($vetor as $key => $v){
    // echo "$v<br>";
    echo "$key => $v <br>";
};
};
echo '<br>';
echo '<br>';
/*$conte=0;
while($conte < count($vetor)){
  echo $vetor[$conte] . '<br>';
  $conte++;
}; */
/////////////////////////////////////////


function separarProdutos($separador='',$produtos=''){

    $vetor = explode($separador, $produtos);
    return $vetor;
}

/* função que imprime o conteúdo de uma variável */
// $vetor - vetor/matriz/obj
function dumpvar($var){
    echo '<pre>';
    //print_r($vetor); //exibição simpes
    var_dump($var); // exibicação detalhada
    echo'</pre>';
};
//////////////////////////////////////////////////////////////
// Function formataNumero

function formataNumero($numero, $simbolo='R$',$decimais=2,$padrao='bd'){
    if($padrao=='bd'){
        return number_format($numero, $decimais, ',', '.');
    } else {
        $retorno = str_replace('R$','', $numero);
        $retorno = str_replace('.','',$retorno);
        $retorno = str_replace(',','.',$retorno);
        // $retorno = number_format($treorno, $decimais, '.', ',')
        return $retorno;
    }
}
?>
