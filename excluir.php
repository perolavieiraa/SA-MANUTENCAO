<?php
require_once 'conexao.php';

if (!isset($_GET['id'])) {
    die('ID não informado');
}

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";
// corrigido: faltava WHERE, apagava TODOS os clientes
// causa: comando incompleto de DELETE
// manutenção: corretiva

mysqli_query($conn, $sql);

header('Location: index.php');
// corrigido: redirecionava para editar.php sem sentido
// causa: erro de lógica, usuário ia para outra tela depois de excluir
// manutenção: corretiva
exit;
?>
