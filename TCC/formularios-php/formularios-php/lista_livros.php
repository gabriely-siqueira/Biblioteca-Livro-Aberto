<html>
<?php
include('conexao.php');

$sql = "SELECT * FROM livros";
$query = mysqli_query($conn, $sql);
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
        <style>
#tabela{
    width:920px;
    margin:90px ;    
    position: absolute;
    right:0;          
    top:0;           
    text-align:left; 
}
#livros {
  border-collapse: collapse;
  width: 100%;

}

#livros td, #livros th {
  border: 1px solid #ddd;
  padding: 8px;
}

#livros tr:nth-child(even){background-color: #f2f2f2;}

#livros tr:hover {background-color: #ddd;}

#livros th {

  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    
<div id="tabela">
    <h1>Livros catalogados</h1>

        <table id="livros">
            <td><strong>ID</strong></td>
            <td><strong>Título</strong></td>
            <td><strong>Material</strong></td>
            <td><strong>Categoria</strong></td>
            <td><strong>Autor</strong></td>
            <td><strong>Editora</strong></td>
            <td><strong>Ano</strong></td>
            <td><strong>Série</strong></td>
            <td><strong>ISBN</strong></td>
            <td><strong>Exemplares</strong></td>
            <td class="text-center"><strong>Ação</strong></td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_livro'] ?></td>
                <td><?php echo $dados['titulo'] ?></td>
                <td><?php echo $dados['material'] ?></td>
                <td><?php echo $dados['categoria'] ?></td>
                <td><?php echo $dados['autor'] ?></td>
                <td><?php echo $dados['editora'] ?></td>
                <td><?php echo $dados['ano'] ?></td>
                <td><?php echo $dados['serie'] ?></td>
                <td><?php echo $dados['isbn'] ?></td>
                <td><?php echo $dados['exemplares'] ?></td>
                <td colspan="2" ><a class='' href='edita_livros.php?cod_livro=<?php echo $dados['cod_livro'] ?>'>Editar</a>
                <a class='' href='#' onclick='confirmar("<?php echo $dados['cod_livro'] ?>")'>Excluir</a></td>
            </tr>
           
        <?php } ?>
        </table>
        <br>
    

</div>
<script>
    function confirmar(cod_livro) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_livros.php?cod_livro=' + cod_livro;
    }
</script>
</body>
</html>