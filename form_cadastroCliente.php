<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
</head>

<body>
  <h3>Cadastro de Cliente </h3>
  <form method="POST" action="cadastroCliente.php">
    <p>Nome: <input type="text" name="nome" required> </p>
    <p>Telefone: <input type="text" name="telefone" required> </p>
    <p>Email: <input type="text" name="email" required> </p>
    <p>Cpf: <input type="text" name="cpf" required> </p>
    <p> <button type="submit">Cadastrar</button></p>
  </form>
  <a href="listarCliente.php">Listar clientes</a>
</body>

</html>