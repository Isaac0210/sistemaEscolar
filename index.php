<?php
$arquivo = __DIR__ . "/dados/usuarios.json";
$usuarios = json_decode(file_get_contents($arquivo), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container"></div>

<?php foreach ($usuarios as $usuario): ?>
    <div>
        <strong><?= htmlspecialchars($usuario["nome"]) ?></strong>
        - <?=  htmlspecialchars($usuario["tipo"]) ?></strong>
        - <?=  htmlspecialchars($usuario["email"]) ?></strong>

        <a href="excluir.php?id=<?= urlencode($usuario["id"]) ?>">
            Excluir
        </a>
    </div>
<?php endforeach; ?>
</body>
</html>