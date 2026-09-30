<?php

$arquivo = __DIR__ . '/dados/usuarios.json';
$id = $_GET['id'] ?? null;

$usuarios = json_decode(
    file_get_contents($arquivo),
    true
);

$usuario = array_filter(
    $usuarios,
    fn($usuarios) => $usuarios['id'] !== $id
);

file_put_contents(
    $arquivo,
    json_encode(
        array_values($usuario),
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    )
);

header('Location: index.php');
exit;

?>