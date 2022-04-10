<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livros</title>
    
</head>
<body>
<form action="recebe_dados.php" method="POST">
    <h1>Agendamento de empréstimo</h1>
    <p>Nome do leitor <input type="text" size="35" maxlength="256" name="nomeleitor"></p>
    <p>Livro <input type="text" size="35" maxlength="256" name="livro"></p>
    <p>Data de hoje<input type="date" size="35" maxlength="256" name="hoje"></p>
    <p>Data de entrega <input type="date" size="35" maxlength="256" name="entrega"></p>
    <p><input type="submit" value="Cadastrar"></p>
    <a href="menu.php">Voltar</a>
</form>
</body>
</html>