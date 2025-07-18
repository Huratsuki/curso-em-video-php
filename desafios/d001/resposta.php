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
        <h1>Resultado final</h1>

        <?php
        $numero = $_REQUEST["numero"] ?? 0;
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "O número escolhiddo é, <strong>$numero</strong>!<br>";
        echo "O antecessor é, $antecessor!<br>";
        echo "O sucessor é, $sucessor!<br>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar para a página anterior.</button> 
    </main>
</body>

</html>