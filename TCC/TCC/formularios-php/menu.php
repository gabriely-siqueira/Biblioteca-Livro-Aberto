<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
  <title>Livro Aberto</title>  

<link href="css/menu.css" rel="stylesheet"></head>

<body>
    <section>
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
        <!--texto----------------->
        <div class="texto">
            <P> Bem vindo a biblioteca <br> Livro Aberto</P>
            <a href="./emprestimo.php"><button class="emprestimo-btn">Cadastrar Empréstimo</button></a>
            
        </div>
        <!--imagem biblioteca-->
        <img src="img/estante.jpg" class="img-biblioteca">
    </section>
</body>