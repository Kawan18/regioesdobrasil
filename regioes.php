<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body {
            background-color: #333;
        }
        h1 {
            text-align: center;
            color: #fff;
            margin-top: 50px;
        }
        p {
            width: 560px;
            margin-left: 390px;
            text-align: justify;
            color: #fff;
        }
        img {
            width: 300px;
            margin-left: 525px;
            margin-top: 60px;
            border: solid 3px #000;
            border-radius: 20px;
        }
        footer {
            text-align: center;
            background-color: rgb(30, 22, 22);
            height: 70px;
            margin-left: -8px;
            margin-right: -8px;
            margin-top: 40px;
            
            color: #fff;
        }
        a {
            color: #fff;

        }
    </style>
</head>
<body>
    
    <?php

        $estado = $_GET["estado"];

        switch ($estado) {
            case 1:
                echo "<h1>Região Norte</h1>";
                echo "<p>O norte do Brasil engloba os estados de Acre, Amapá, Amazonas, Pará, Rondônia, Roraima e Tocantins. A floresta tropical da Amazónia, célebre pela sua biodiversidade, abrange a maior parte da região.</p>";
                echo "<img src='https://www.infoescola.com/wp-content/uploads/2008/10/regiao-norte.jpg'>";
                break;
            case 2:
                echo "<h1>Região Nordeste</h1>";
                echo "<p>A Região Nordeste é uma das cinco regiões do Brasil definidas pelo Instituto Brasileiro de Geografia e Estatística em 1969. Possui área equivalente à da Mongólia ou do estado do Amazonas, população equivalente à da África do Sul e um IDH alto, também comparável com o da África do Sul.</p>";
                echo "<img src='https://www.infoescola.com/wp-content/uploads/2008/10/regiao-nordeste.jpg'>";
                break;
            case 3:
                echo "<h1>Região Centro-Oeste</h1>";
                echo "<p>A Região Centro-Oeste é uma das cinco regiões do Brasil definidas pelo IBGE em 1969. É formada por três estados: Goiás, Mato Grosso e Mato Grosso do Sul, mais o Distrito Federal, onde se localiza Brasília, a capital do país e a cidade mais populosa da região.</p>";
                echo "<img src='https://www.infoescola.com/wp-content/uploads/2008/10/regiao-centro-oeste.jpg'>";
                break;
            case 4:
                echo "<h1>Região Sudeste</h1>";
                echo "<p>O sudeste brasileiro é uma região que engloba os 4 estados vizinhos de Rio de Janeiro, São Paulo, Minas Gerais e Espírito Santo. O estado costeiro do Rio de Janeiro é conhecido pela sua capital, a cidade do Rio de Janeiro, onde os pontos de referência incluem o Pão de Açúcar e a estátua do Cristo Redentor.</p>";
                echo "<img src='https://www.infoescola.com/wp-content/uploads/2008/10/regiao-sudeste.jpg'>";
                break;
            case 5:
                echo "<h1>Região Sul</h1>";
                echo "<p>A Região Sul do Brasil é a menor das cinco regiões do país, com área territorial de 576 774,31 km², sendo maior que a área da França metropolitana e menor que o estado brasileiro de Minas Gerais. Faz parte da Região Centro-Sul do Brasil.</p>";
                echo "<img src='https://www.infoescola.com/wp-content/uploads/2008/10/regiao-sul.jpg'>";
                break;
        }

    ?>
    <footer>
        <h3>Design by Kauã de O. Roldão</h3>
        <a href="mailto:roldaokaua@gmail.com">Contato |</a>
        <a href="">Linkedin</a>
    </footer>
</body>
</html>