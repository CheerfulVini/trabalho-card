<?php

$nome = $_POST['nome'];
$tamanho = $_POST['tamanho'];
$alinhamento = $_POST['alinhamento'];
$ca = $_POST['ca'];
$hp = $_POST['hp'];
$velocidade = $_POST['velocidade'];

$for = $_POST['for'];
$des = $_POST['des'];
$con = $_POST['con'];
$int = $_POST['int'];
$sab = $_POST['sab'];
$car = $_POST['car'];

$salvaguardas = $_POST['salvaguardas'];
$pericias = $_POST['pericias'];
$sentidos = $_POST['sentidos'];
$linguas = $_POST['linguas'];

$habilidade1_nome = $_POST['habilidade1_nome'];
$habilidade1_desc = $_POST['habilidade1_desc'];
$habilidade2_nome = $_POST['habilidade2_nome'];
$habilidade2_desc = $_POST['habilidade2_desc'];

$acao1_nome = $_POST['acao1_nome'];
$acao1_desc = $_POST['acao1_desc'];
$acao2_nome = $_POST['acao2_nome'];
$acao2_desc = $_POST['acao2_desc'];

$reacao1_nome = $_POST['reacao1_nome'];
$reacao1_desc = $_POST['reacao1_desc'];
$reacao2_nome = $_POST['reacao2_nome'];
$reacao2_desc = $_POST['reacao2_desc'];

$imagem = $_POST['imagem'];



print('<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>');

print('
    <div id="container">
        <div>
            <h1>' . $nome . '</h1>

            <strong>' . $tamanho . ',' . $alinhamento . '</strong>
        </div>

        <div>
            <strong>Classe de armadura</strong> '. $ca .' <br>
            <strong>Pontos de vida</strong> '. $hp .' <br>
            <strong>Velocidade</strong> '. $velocidade .' m. <br>
        </div>

        <div id="atributos">
            <div class="atributo">
                <strong>FOR</strong>
                <p>'. $for .'</p>
            </div>

            <div class="atributo">
                <strong>DES</strong>
                <p>'. $des .'</p>
            </div>

            <div class="atributo">
                <strong>CON</strong>
                <p>'. $con .'</p>
            </div>

            <div class="atributo">
                <strong>INT</strong>
                <p>'. $int .'</p>
            </div>

            <div class="atributo">
                <strong>SAB</strong>
                <p>'. $sab .'</p>
            </div>

            <div class="atributo">
                <strong>CAR</strong>
                <p>'. $car .'</p>
            </div>
        </div>

        <div>
            <strong>Salvaguardas</strong> '. $salvaguardas .' <br>
            <strong>Perícias</strong> '. $pericias .' <br>
            <strong>Sentidos</strong> Percepção passiva '. $sentidos .' <br>
            <strong>Línguas</strong> '. $linguas .' <br>    
        </div>

        <div id="habilidades">
            <strong>'. $habilidade1_nome .'</strong> '. $habilidade1_desc .' <br>
            <strong>'. $habilidade2_nome .'</strong> '. $habilidade2_desc .'

            <h1>Ações</h1>
            <strong>'. $acao1_nome .'</strong> '. $acao1_desc .'<br>

            <strong>'. $acao2_nome .'</strong> '. $acao2_desc .'

            <h1>Reações</h1>
            <strong>'. $reacao1_nome .'</strong> '. $reacao1_desc .'

            <strong>'. $reacao2_nome .'</strong> '. $reacao2_desc .'
        </div>

        <div>
            <img src="'. $imagem .'" width="380px" height="380px">
        </div>
    </div>');

print('</body>
</html>');
