<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $salarioMinimo = 1509;
    $salario = $_GET["salario"] ?? 1509;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>">
            <p>Considerando o salário mínimo de <strong>R$<?= number_format($salarioMinimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php

        $calculo = intdiv($salario, $salarioMinimo);
        $restoCalculo = $salario % $salarioMinimo;

        echo "<p> Quem recebe um salário de $salario ganha <strong>$calculo salários mínimos</strong> + R\$ " . number_format($restoCalculo, 2, ",", ".") . "</p>";
        ?>
    </section>
</body>

</html>