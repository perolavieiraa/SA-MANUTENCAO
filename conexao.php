<?php
// Conexão com o banco de dados
$host = "localhost";
$user = "root";
$pass = "root";
$db   = "manutencao";

$conn = mysqli_connect($host, $user, $pass, $db);  
// corrigido: variável estava $server; causa: variável inexistente, conexão falhava
// manutenção: corretiva

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
