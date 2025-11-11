<?php
require_once 'conexao.php';

$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);
// corrigido: estava usando $results, nome errado da variável
// causa: erro de digitação, loop não rodava
// manutenção: corretiva
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lista de Clientes</title>
</head>
<body>
  <h1>Clientes</h1>
  <a href="cadastro.php">Cadastrar novo</a>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr><th>ID</th><th>Nome</th><th>CPF</th><th>Ações</th></tr>

    <?php
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nome']}</td>
                <td>{$row['cpf']}</td>
                <td>
                  <a href='editar.php?id={$row['id']}'>Editar</a> | 
                  <a href='excluir.php?id={$row['id']}'>Excluir</a>
                </td>
              </tr>";
      }
    } else {
      echo '<tr><td colspan="4">Nenhum registro encontrado</td></tr>';
    }
    ?>
  </table>
</body>
</html>
