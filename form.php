<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ficha.php" method="post">
        Nome <input type="text" name="nome"><br><br>

        Tamanho 
        <select name="tamanho">
            <option value="">--Tamanho--</option>
            <option value="Miúdo">Miúdo</option>
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Médio</option>
            <option value="Grande">Grande</option>
            <option value="Enorme">Enorme</option>
            <option value="Gigantesco">Gigantesco</option>
        </select><br>

        Alinhamento 
        <select name="alinhamento">
            <option value="">--Alinhamento--</option>
            <option value="Leal Bom">Leal Bom</option>
            <option value="Neutro Bom">Neutro Bom</option>
            <option value="Caótico Bom">Caótico Bom</option>
            <option value="Leal Neutro">Leal Neutro</option>
            <option value="Neutro">Neutro</option>
            <option value="Caótico Neutro">Caótico Neutro</option>
            <option value="Leal Mau">Leal Mau</option>
            <option value="Neutro Mau">Neutro Mau</option>
            <option value="Caótico Mau">Caótico Mau</option>
        </select><br><br>

        Classe de Armadura <input type="number" name="ca"><br>
        Pontos de Vida <input type="number" name="hp"><br>
        Velocidade (m) <input type="number" name="velocidade"><br><br>

        FOR <input type="number" name="for"><br>
        DES <input type="number" name="des"><br>
        CON <input type="number" name="con"><br>
        INT <input type="number" name="int"><br>
        SAB <input type="number" name="sab"><br>
        CAR <input type="number" name="car"><br><br>

        Salvaguardas <input type="text" name="salvaguardas"><br>
        Perícias <input type="text" name="pericias"><br>
        Percepção passiva <input type="text" name="sentidos"><br>
        Línguas <input type="text" name="linguas"><br><br>

        Habilidade 1 <input type="text" name="habilidade1_nome"><br>
        Descrição <textarea name="habilidade1_desc"></textarea><br>

        Habilidade 2 <input type="text" name="habilidade2_nome"><br>
        Descrição <textarea name="habilidade2_desc"></textarea><br><br>

        Ação 1 <input type="text" name="acao1_nome"><br>
        Descrição <textarea name="acao1_desc"></textarea><br>

        Ação 2 <input type="text" name="acao2_nome"><br>
        Descrição <textarea name="acao2_desc"></textarea><br><br>

        Reação 1 <input type="text" name="reacao_nome1"><br>
        Descrição <textarea name="reacao_desc1"></textarea><br><br>

        Reação 2 <input type="text" name="reacao_nome2"><br>
        Descrição <textarea name="reacao_desc2"></textarea><br><br>

        <input type="text" name="imagem" id="">Imagem

        <input type="submit" value="Enviar Ficha">
    </form>

</body>
</html>
