<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    // corrigido: faltava ponto e vírgula
    // causa: erro de sintaxe, página quebrava
    // manutenção: corretiva

    $sql = "INSERT INTO clientes (nome, cpf) VALUES ('$nome', '$cpf')";
    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
</head>
<body>
  <h1>Cadastrar Cliente</h1>

  <form method="post">
    <label>Nome:<br><input type="text" name="nome"></label><br><br>
    <label>CPF:<br><input type="text" name="cpf"></label><br><br>
    <button type="submit">Salvar</button>
    <!-- corrigido: botão estava sem "submit", formulário não enviava
         causa: atributo faltando
         manutenção: corretiva -->
  </form>

  <p><a href="index.php">Voltar</a></p>
  <!-- corrigido: link estava sem .php
       causa: caminho incorreto, dava erro 404
       manutenção: corretiva -->
</body>
</html>
