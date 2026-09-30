<?php

$arquivo = _DIR_ . '/data/usuarios.json';
$id = $_GET['id'] ?? null "";

$usario = json_decode(
    file_get_contentes($arquivo),
    true
);

$usuario = array_filter(
    $usuario,
    fn($usuario) => $usuario['id'] !== $id
);

file_put_contents(
    json_encode(
        array_values($usuario),
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    )
);

Header('Location: index.php');

exit;
