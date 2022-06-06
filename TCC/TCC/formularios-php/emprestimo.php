<?php
if (isset($_POST['submit'])) {
    
   include_once('conexao.php');
    $nome_leitor = $_POST['nome_leitor'];
    $nome_livro = $_POST['nome_livro'];
    $data_hoje = $_POST['data_hoje'];
    $data_entrega = $_POST['data_entrega'];

    $resu = mysqli_query($conn,"INSERT INTO emprestimos(nome_leitor,nome_livro,data_hoje,data_entrega) 
    VALUES ('$nome_leitor','$nome_livro','$data_hoje','$data_entrega')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
<body>
   <!--barra de navegação---------------------->   
   <nav> 
            <!--logo---------------------->
            <a href="menu.php"  class="logo"><img src="img/book-1528240.jpg"></a>
            
            <!--menu------------------------------>
            <ul>
                <li><a href="./menu.php" class="active">Menu</a></li>
                <li><a href="./livros.php"> Livros</a></li>
                <li><a href="./leitores.php" > Leitores </a></li>
                <li><a href="ajuda.php">Ajuda</a></li>
                <li><a href="./emprestimo.php" title="">Empréstimo</a></li>
                <li><a href="./login.php" title="">Sair</a></li>
            </ul>
        </nav>
      
    <h1 id="titulo">Agendamento de empréstimo</h1>
<form name="cadastro_emprestimo" action="emprestimo.php" method="POST">
    <fieldset class="grupo">
        <div class="campo">
            <label for="nomeleitor"><strong>Nome do leitor</strong></label>
            <input type="text" name="nome_leitor" id="nome_leitor" required>
        </div>
    </fieldset> 
    <div class="campo">
        <label for="livro"><strong>Título do livro</strong></label>
        <input type="text" name="nome_livro" id="nome_livro" required>
    </div>
    <div class="campo">
        <label for="hoje"><strong>Data de hoje</strong></label>
        <input type="date" name="data_hoje" id="data_hoje" required>
    </div>
    <div class="campo">
        <label for="entrega"><strong>Data da entrega</strong></label>
        <input type="date" name="data_entrega" id="data_entrega" required>
    </div>

    <button class="btn" type="submit" name="submit" onsubmit="">Cadastrar</button>         
        <button class="btn" type="button" onsubmit="">Voltar</button>     
    
</form>
</body>
</html>