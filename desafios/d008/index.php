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
        <h1>Informe um número</h1>

        <?php
        $numero = $_GET["numero"] ?? 1;
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="numero">número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
        $raizQuadrada = sqrt($numero);
        $raizCubica = $numero ** (1/3);

        echo "Analisando o número <strong> $numero</strong>, temos: ";
        echo "<ul>
            <li>
                A sua raíz quadrada é <strong>" . number_format($raizQuadrada, 3, ",", ".") . "</strong>
            </li>
            <li>
                A sua raíz cubica é <strong>" . number_format($raizCubica, 3, ",", ".") . "</strong>
            </li>
        </ul>";
        ?>
    </section>
</body>

</html>