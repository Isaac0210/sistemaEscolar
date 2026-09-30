<?php

$arquivo = __DIR__ . "/dados/usuarios.json";

$usuarios = json_decode(file_get_contents($arquivo), true);

$id = $_GET["id"];

foreach ($usuarios as $posicao => $usuario) {

    if ($usuario["id"] == $id) {

        unset($usuarios[$posicao]);

        break;
    }
}

$usuarios = array_values($usuarios);

file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

header("Location: tabela.php");

exit;

?>