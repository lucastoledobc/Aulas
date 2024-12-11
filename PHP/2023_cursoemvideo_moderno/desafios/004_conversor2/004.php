<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Resultado:</h1>
    </header>
    <main>
        <?php
            $ini = date("m-d-Y", strtotime("-5 days"));
            $fim = date("m-d-Y");
            $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$ini.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

            $x1 = $_GET["nume"];
            $x2 = $dados["value"][0]["cotacaoCompra"];
            echo "Você tem na sua carteira: ". numfmt_format_currency($padrao, $x1/$x2, "USD").".<br>
            Cotação de $x2 obtida diretamente do site do <strong>Banco Central do Brasil</strong>.";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>