
<?php
include('conexao.php');

$cod_emprestimo = $_GET['cod_emprestimo'];

if (isset($_POST['editar'])) {
    $cod_leitor = $_POST['cod_leitor'];
    $cod_livro = $_POST['cod_livro'];
    $data_hoje = $_POST['data_hoje'];
    $data_entrega = $_POST['data_entrega'];
    

    $sql = "UPDATE emprestimos SET 
                cod_leitor='$cod_leitor', 
                cod_livro='$cod_livro', 
                data_hoje='$data_hoje',
                data_entrega='$data_entrega' 
                 
            WHERE cod_emprestimo='$cod_emprestimo'";
    echo $sql;
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: emprestimos.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM emprestimos WHERE cod_emprestimo=$cod_emprestimo";
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
     
    <div> 
        <h1 id="titulo">Agendamento de empréstimo</h1>
    </div>
    <form name="cadastro_emprestimo" form action="edita_emprestimo.php?cod_emprestimo=<?php echo $cod_emprestimo ?>" method="POST">

    <fieldset class="grupo">
        <div class="campo">
            
        <label for="nome_leitor"><strong>Nome do leitor</strong></label>
           <input type="text" name="cod_leitor" id="cod_leitor"  value="<?php echo $linha['cod_leitor']; ?> "  required>          
        </div>
    </fieldset> 
    <div class="campo">
        <label for="livro"><strong>Título do livro</strong></label>
        <input type="text" name="cod_livro" id="cod_livro"  value="<?php echo $linha['cod_livro']; ?> " required>
    </div>
    <div class="campo">
        <label for="hoje"><strong>Data de hoje</strong></label>
        <input type="date" name="data_hoje" id="data_hoje"  value="<?php echo $linha['data_hoje']; ?> "  required>
    </div>
    <div class="campo">
        <label for="entrega"><strong>Data da entrega</strong></label>
        <input type="date" name="data_entrega" id="data_entrega"   value="<?php echo $linha['data_entrega']; ?> "  required>
    </div>

  

        <!-- Botão para enviar o formulário -->
        <button class="btn" type="submit" name="editar" onsubmit="">Cadastrar</button>            
        <button class="btn" type="button"  onsubmit="">Voltar</button>     
    </form>



</body>

</html>