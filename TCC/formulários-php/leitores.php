<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitores</title>
</head>
<body>
<form action="recebe_dados.php" method="POST">
    <h1>Cadastro de Leitores</h1>
    <p>Nome: <input type="text" size="35" maxlength="256" name="nome"></p>
    <p>Email:<input type="text" size="35" maxlength="256" name="campoemail"></p>
    <p>Telefone:<input type="text"size="35" maxlength="256" name="fone"></p>
    <p>Data de Nascimento <input type="date"size="35"  name="nascimento"></p>
    <p>Endereço: <input type="text"size="35"  name="endereco"></p>
    <p>CPF: <input type="text"  name="cpf"size="35" maxlength="256"></p>
    <p>RG: <input type="text"  name="RG" size="35" maxlength="256"></p>

    <p><input type="submit" value="Cadastrar"></p>

    <a href="menu.php">Voltar</a>
    </form>
</body>
</html>