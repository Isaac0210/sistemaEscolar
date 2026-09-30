<?php

$arquivo = __DIR__ . "/dados/usuarios.json";

$usuarios = json_decode(file_get_contents($arquivo), true);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabela</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main>

        <section class="principio">

            <div class="container">

                <h2>Usuários Cadastrados</h2>

                <table>

                    <tr>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Informação específica</th>
                        <th>Ação</th>
                    </tr>

                    <?php foreach ($usuarios as $usuario): ?>

                    <tr>

                        <td>
                            <?php echo htmlspecialchars($usuario["tipo"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($usuario["nome"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($usuario["email"]); ?>
                        </td>

                        <td>
                            <?php echo htmlspecialchars($usuario["extra"]); ?>
                        </td>

                        <td>
                            <a href="excluir.php?id=<?php echo urlencode($usuario["id"]); ?>">
                                Excluir
                            </a>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </table>

                <button type="button" onclick="window.location.href='index.php'">
                    Voltar para Tela Inicial
                </button>

            </div>

        </section>

    </main>

</body>

</html>