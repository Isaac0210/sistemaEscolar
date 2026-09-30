<?php

$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$extra = $_POST["extra"];

$arquivo = __DIR__ . "/dados/usuarios.json";

$usuarios = json_decode(file_get_contents($arquivo), true);

$id = uniqid();

$novoUsuario = [
    "id" => $id,
    "tipo" => $tipo,
    "nome" => $nome,
    "email" => $email,
    "extra" => $extra
];

$usuarios[] = $novoUsuario;

file_put_contents(
    $arquivo,
    json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Informações</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main>

        <section class="principio">

            <div class="container">

                <h2>Informações Cadastradas</h2>

                <p>Tipo: <?php echo htmlspecialchars($tipo); ?></p>

                <p>Nome: <?php echo htmlspecialchars($nome); ?></p>

                <p>E-mail: <?php echo htmlspecialchars($email); ?></p>

                <p>Informação específica: <?php echo htmlspecialchars($extra); ?></p>

                <button type="button" onclick="window.location.href='index.php'">
                    Voltar para Tela Inicial
                </button>

                <button type="button" onclick="window.location.href='tabela.php'">
                    Ir para Tabela
                </button>

            </div>

        </section>

    </main>

</body>

</html>