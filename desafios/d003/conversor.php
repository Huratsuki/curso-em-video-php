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
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $real = $_GET["din"] ?? 0;
        $cotacao = 5.56;
        $dolar = $real / $cotacao;

        //formatação de moedas com internacionalização!
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus R\$ " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a U\$ " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        echo "Cotação fixa de $cotacao informada diretamente no código";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>