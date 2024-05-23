<?php
$con = mysqli_connect('localhost','root','123456','votoss');
$sql = "SELECT quant_votos_sim FROM votoss";
$retorno=mysqli_query($con,$sql);
$dados=mysqli_fetch_assoc($retorno);
$votossim=$dado['quant_votos_sim'];

$sql = "SELECT quant_votos_nao FROM votoss";
$retorno=mysqli_query($con,$sql);
$dados=mysqli_fetch_assoc($retorno);
$votosnao=$dado['quant_votos_nao'];

$totalvotos = $votossim  +  $votosnao;

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VotaçãoGremio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .votos {
            text-align: center;
            margin-bottom: 30px;
        }
        
        h3 {
            margin-top: 0;
        }
        
        form {
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        input[type="radio"] {
            margin-right: 5px;
        }
        
        .botao {
            font-size: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .botao:hover {
            background-color: #0056b3;
        }
        
        h1 {
            margin-top: 40px;
            margin-bottom: 10px;
        }
        
        p {
            margin: 5px 0;
        }
        
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <section class="votos">
            <h3>VOTE!</h3>
            <div>
                <h1>Chapa01</h1>
                <form method="GET" action="envia_voto.php">
                    <input type="radio" name="voto" value="sim"> Sim <br>
                    <input type="radio" name="voto" value="nao"> Não <br><br>
                    <input class="botao" type="submit" value="VOTAR">
                </form>
            </div>
            <div>
              
               
        </section>
        <h1>Acompanhe a Votação Geral :</h1>
        <div>
            <p>Chapa01</p>
            <p>Total de Votos:<?php echo $totalvotos;?> </p>
            <p>Sim</p>
            <p>Não</p>
            <hr>
        </div>
        
    </div>
</body>
</html>
