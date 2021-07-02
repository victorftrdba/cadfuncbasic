<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treinando PHP</title>
</head>
<body>

<form action="conecta.php" method="POST">
    <h2>Digite o ID</h2>
    <input type="number" name="id" required />
    <h2>Digite o nome</h2>
    <input type="text" name="nome" required />
    <h2>Digite a idade</h2>
    <input type="number" name="idade" required />
    <h2>Digite a profissão</h2>
    <input type="text" name="profissao" required />
    <h2>Digite o salário</h2>
    <input type="number" name="salario" required />
    <input type="submit" />
</form>

</body>
</html>