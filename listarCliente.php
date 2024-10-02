<?php
  require 'Banco.php';
  require 'Cliente.php';

  $banco = new Banco();
  $conexao = $banco->getConexao();

$cliente = new Cliente($conexao);
$stmt = $cliente->read($conexao);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>
    <h2>Lista de Clientes<h2>

            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($clientes as $cliente){ ?>
                <tr>
                    <td><?php echo $cliente['id_cliente']; ?></td>
                    <td><?php echo $cliente['nome']; ?> </td>
                    <td><?php echo $cliente['telefone']; ?> </td>
                    <td><?php echo $cliente['email']; ?> </td>
                    <td><?php echo $cliente['cpf']; ?> </td>
                    <td>
                        <a href="form_atualizaCliente.php?id=<?php echo $cliente['id_cliente']; ?>">Editar</a>
                        <a href="deletarCliente.php?id=<?php echo $cliente['id_cliente']; ?>">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </table>

            <a href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
</body>

</html>