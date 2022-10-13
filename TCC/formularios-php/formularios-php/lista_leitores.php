<html>
<?php
include('conexao.php');

$sql = "SELECT * FROM leitores";
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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
     
     <style>
#tabela{
    width:920px;
    margin:90px ;    
    position: absolute;
    right:0;          
    top:0;           
    text-align:left; 
}
#leitores {
  border-collapse: collapse;
  width: 100%;

}

#leitores td, #leitores th {
  border: 1px solid #ddd;
  padding: 8px;
}

#leitores tr:nth-child(even){background-color: #f2f2f2;}

#leitores tr:hover {background-color: #ddd;}

#leitores th {

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
    <h1>Leitores cadastrados</h1>

        <table id="leitores">
            <td><strong>ID</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Telefone</strong></td>
            <td><strong>Data de Nascimento</strong></td>
            <td><strong>Endereço</strong></td>
            <td><strong>CPF</strong></td>
            <td><strong>RG</strong></td>
            <td class="text-center"><strong>Ação</strong></td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_leitor'] ?></td>
                <td><?php echo $dados['nome_leitor'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><?php echo $dados['telefone'] ?></td>
                <td><?php echo $dados['data_nasc'] ?></td>
                <td><?php echo $dados['endereco'] ?></td>
                <td><?php echo $dados['cpf'] ?></td>
                <td><?php echo $dados['rg'] ?></td>
                <td colspan="2" class="text-center"><a class='' href='edita_leitores.php?cod_leitor=<?php echo $dados['cod_leitor'] ?>'>Editar</a>
                <a class='' href='#' onclick='confirmar("<?php echo $dados['cod_leitor'] ?>")'>Excluir</a></td>
             
            </tr>
           
        <?php } ?>
        </table>
        <br>
    
</div>
<script>
    function confirmar(cod_leitor) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_leitores.php?cod_leitor=' + cod_leitor;
    }
</script>
</body>
</html>