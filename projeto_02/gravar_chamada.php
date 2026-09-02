<?php
require_once "funcao.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sala = $_POST['sala'];
    $nome = $_POST['nome'];
    $ra   = $_POST['RA'];

    
    if (!function_exists('salvarPresenca')) {
        die("Erro: a função salvarPresenca não foi encontrada em funcao.php.");
    }

    call_user_func('salvarPresenca', $sala, $nome, $ra);

    echo "Presença de $nome gravada com sucesso!";
    
} else {
    echo "Nenhum dado enviado.";
}
?>
