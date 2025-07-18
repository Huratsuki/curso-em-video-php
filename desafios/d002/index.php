<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>

        <?php
        $numero = mt_rand(0, 100);
        echo "Gerando um número aleatório entre 0 e 100<br>";
        echo "O valor gerado foi $numero "
        ?>

        <button onclick="javascript:document.location.reload()">🔁 Gerar outro número.</button>
    </main>
</body>

</html>