
<?php
include('conexao.php');

$cod_leitor = $_GET['cod_leitor'];

if (isset($_POST['submit'])) {
    $nome_leitor = $_POST['nome_leitor'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];

    $sql = "UPDATE users SET 
                nome_leitor='$nome_leitor', 
                email='$email', 
                telefone='$telefone',
                data_nasc='$data_nasc' 
                endereco='$endereco' 
                cpf='$cpf' 
                rg='$rg' 

            WHERE cod_leitor='$cod_leitor'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: listaUsuarios.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM leitores WHERE cod_leitor=$cod_leitor";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>

<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitores</title>
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
    <div> 
        <h1 id="titulo">Cadastro de Leitores</h1>
    </div>
    <form name="cadastro_leitor" action="leitores.php" method="POST">

        <fieldset class="grupo">
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome_leitor" id="nome_leitor" required>
            </div>

           
        </fieldset> 

        <!-- Campo de email -->
        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="campo">
            <label for="telefone"><strong>Telefone</strong></label>
            <input type="text" name="telefone" id="telefone" required>
        </div>
        <div class="campo">
            <label for="dn"><strong>Data de nascimento</strong></label>
            <input type="date" name="data_nasc" id="" required>
        </div>
        <div class="campo">
            <label for="endereco"><strong>Endereço</strong></label>
            <input type="text" name="endereco" id="endereco" required>
        </div>
        <div class="campo">
            <label for="cpf"><strong>CPF</strong></label>
            <input type="text" name="cpf" id="cpf" required>
        </div>
        <div class="campo">
            <label for="RG"><strong>RG</strong></label>
            <input type="text" name="rg" id="RG" required>
        </div>

        <!-- Botão para enviar o formulário -->
        <button class="btn" type="submit" name="submit" onsubmit="">Cadastrar</button>            
        <button class="btn" type="button" onsubmit="">Voltar</button>     
    </form>



</body>

</html>