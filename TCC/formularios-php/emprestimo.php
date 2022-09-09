<?php
if (isset($_POST['submit'])) {
    include_once('conexao.php');
    $nome_leitor = $_POST['cod_leitor'];
    $email = $_POST['cod_livro'];
    $data_hoje= $_POST['data_hoje'];
    $data_entrega= $_POST['data_entrega'];
    

    $result = mysqli_query($conn,"INSERT INTO emprestimos(cod_leitor,cod_livro,data_hoje,data_entrega) 
    VALUES ('$cod_leitor','$cod_livro','$data_hoje','$data_entrega')");

}
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
    <title>Empréstimo de Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet" href="css/estilo.css"> 

</head>
<body>

    <h1>Agendamento de empréstimo</h1>
<form class="form" name="cadastro_emprestimo" action="emprestimo.php" method="POST">
    <fieldset class="grupo">
        <div class="campo">
            
        <label for="nome_leitor"><strong>Nome do leitor</strong></label>
           <input type="text" name="cod_leitor" id="cod_leitor" required>          
        </div>
    </fieldset> 
    <div class="campo">
        <label for="livro"><strong>Título do livro</strong></label>
        <input type="text" name="cod_livro" id="cod_livro" required>
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

<?php 
include 'lista_emprestimo.php';
?>

<?php  /*<select>  <option>Selecione</option>
             $sql = "select * from leitores";
            $resultado = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($resultado)) { ?>
                <option value=<?php echo $linha['cod_leitor'] ?>>
                    <?php echo $linha['nome_leitor'] . 'iii' ; ?>
                </option>
                <option>djfjdff</option>
            
            <BR>      }     
            
            <?php $sql = "select * from leitores ";
            $resultado = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($resultado)) { ?>
                <label>Medicamento: <select class='form-control' name="idremedio"></label>
            <option>Selecione</option>
                <option value=<?php echo $linha['cod_leitor'] ?>>
                    <?php echo $linha['nome_leitor'] ; ?>
                </option> <?php echo $linha['nome_leitor']; ?>
            <?php } ?>
        </select><?php  */   ?> 
</body>
</html>