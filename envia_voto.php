<?php
$voto = $_GET['voto'];

$con = mysqli_connect('localhost','root','123456','enquete');

if($voto=$_GET['voto']=='sim')
{
$sql = "UPDATE votoss SET quant_votos_sim = quant_votos_sim + 1 where id=1";
$query = mysqli_query($con,$sql);
}

if($voto=$_GET['voto']=='nao')
{
$sql = "UPDATE votoss SET quant_votos_nao = quant_votos_nao + 1 where id=1";
$query = mysqli_query($con,$sql);
}

$con->close();
?>

<h1> Seu Voto foi computado valeu!</h1>
<a href="enquete.php">VOLTAR</a>