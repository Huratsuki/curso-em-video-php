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
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            // Cotação vinda da API do banco central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];


            $real = $_GET["din"] ?? 0;

            $dolar = $real / $cotacao;

            //formatação de moedas com internacionalização!
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus R\$ " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a U\$ " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
            echo "Cotação fixa de $cotacao informada diretamente do site do banco central";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>