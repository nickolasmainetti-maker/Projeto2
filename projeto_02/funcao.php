<?php

function salvarPresenca($sala, $nome, $ra) {
    $arquivo = fopen("lista_chamada.txt", "a"); 
    $linha = "Sala: $sala | Nome: $nome | RA: $ra\n";
    fwrite($arquivo, $linha);
    fclose($arquivo);
}


function lerPresencas() {
    if (file_exists("lista_chamada.txt")) {
        return file("lista_chamada.txt"); 
    }
    return []; 
}
?>