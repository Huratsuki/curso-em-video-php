<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h2>Médias Ariméticas</h2>

        <?php
        $valor1 = $_GET["v1"] ?? 00;
        $valor2 = $_GET["v2"] ?? 00;
        $peso1 = $_GET["p1"] ?? 00;
        $peso2 = $_GET["p2"] ?? 00;
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $peso1 ?>">

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">

            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $peso2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>

        <?php
        // média aritmética simples 
        $mediaSimples = ($valor1 + $valor2) / 2;

        echo "A Média Aritmética simples entre os valores é igual a " . number_format($mediaSimples, 2, ",", ".");
        ?>

    </section>
</body>

</html>