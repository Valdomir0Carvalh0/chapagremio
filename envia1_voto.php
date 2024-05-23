<?php
$servername = "localhost";
$username = "root"; // altere para o seu nome de usuário do MySQL
$password = ""; // altere para a sua senha do MySQL
$dbname = "votacao_gremio";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $chapa = $_GET['chapa'];
    $voto = $_GET['voto'];

    if (empty($chapa) || empty($voto)) {
        die("Erro: Chapa ou voto não fornecidos.");
    }

    $sql = "INSERT INTO votos (chapa, voto) VALUES ('$chapa', '$voto')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Seu voto foi registrado com sucesso!'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
