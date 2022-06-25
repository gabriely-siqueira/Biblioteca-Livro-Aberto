<html>
<?php
include('conexao.php');

$sql = "SELECT * FROM livros";
$query = mysqli_query($conn, $sql);
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
    <title>Livros</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.2/dist/boxicons.js' rel='stylesheet'>
</head>
<body>
    
<div>
    <h1>Usuários cadastrados</h1>

        <table>
            <td>ID</td>
            <td>Título</td>
            <td>Material</td>
            <td>Categoria</td>
            <td>Autor</td>
            <td>Editora</td>
            <td>Ano</td>
            <td>Série</td>
            <td>ISBN</td>
            <td>Exemplares</td>
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_livros'] ?></td>
                <td><?php echo $dados['titulo'] ?></td>
                <td><?php echo $dados['material'] ?></td>
                <td><?php echo $dados['categoria'] ?></td>
                <td><?php echo $dados['autor'] ?></td>
                <td><?php echo $dados['editora'] ?></td>
                <td><?php echo $dados['ano'] ?></td>
                <td><?php echo $dados['serie'] ?></td>
                <td><?php echo $dados['isbn'] ?></td>
                <td><?php echo $dados['exemplares'] ?></td>
                <td colspan="2" ><a class='' href='edita_livros.php?cod_livros=<?php echo $dados['cod_livros'] ?>'>Editar</a>
                <a class='' href='#' onclick='confirmar("<?php echo $dados['cod_livros'] ?>")'>Excluir</a></td>
            </tr>
           
        <?php } ?>
        </table>
        <br>
    <a class="btn" href="livros.php">Cadastrar novo</a>

</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_livro.php?cod_livros=' + cod;
    }
</script>
</body>
</html>