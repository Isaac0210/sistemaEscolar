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

<main>
    <section class="principio">
        <div class="container">
    <h2>Usuários Cadastrados</h2>

<form action="salvar.php" method="post">
    <label>Tipo:</label>
    <select name="tipo" require>
        <option value="Aluno">Aluno</option>
        <option value="Professor">Professor</option>
        <option value="Funcionario">Funcionário</option>
    </select>
    <label>Nome:</label>
    <input type="text" name="nome" required>
    <label>E-mail:</label>
    <input type="email" name="email" required>
    <label>Informação específica:</label>
    <input type="text" name="extra" required>
    <button type="submit">Cadastrar</button>
</form>
</div>
    </section>
</main>

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