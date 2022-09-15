<html>
<?php
include('conexao.php');

$sql = "SELECT * FROM emprestimos";
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
    width:800px;
    margin:90px ;    
    position: absolute;
    right:0;          
    top:0;           
    text-align:left; 
}
#emprestimos {
  border-collapse: collapse;
  width: 100%;

}

#emprestimos td, #emprestimos th {
  border: 1px solid #ddd;
  padding: 8px;
}

#emprestimos tr:nth-child(even){background-color: #f2f2f2;}

#emprestimos tr:hover {background-color: #ddd;}

#emprestimos th {

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
    <h1>Empréstimos agendados</h1>

    
        <table id="emprestimos">
            <td>ID</td>
            <td>Nome</td>
            <td>Livro</td>
            <td>Data do empréstimo</td>
            <td>Data da entrega</td>
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_emprestimo'] ?></td>
                <td><?php echo $dados['cod_leitor'] ?></td>
                <td><?php echo $dados['cod_livro'] ?></td>
                <td><?php echo !isset($dados['data_hoje']) ? 'Não definida' : $dados['data_hoje'] ?></td>
                <td><?php echo !isset($dados['data_entrega']) ? 'Não definida' : $dados['data_entrega'] ?></td>
                <td colspan="2" ><a  href='edita_emprestimo.php?cod_emprestimo=<?php echo $dados['cod_emprestimo'] ?>'>Editar</a>
                <a class='' href='#' onclick='confirmar("<?php echo $dados['cod_emprestimo'] ?>")'>Excluir</a></td>
            </tr>
           
        <?php } ?>
        </table>
        <br>
    
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_emprestimo.php?cod_emprestimo=' + cod;
    }
</script>
</body>
</html>