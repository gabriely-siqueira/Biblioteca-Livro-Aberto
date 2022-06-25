<html>
<?php
include('conexao.php');

$sql = "SELECT * FROM leitores";
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
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Data de Nascimento</td>
            <td>Endereço</td>
            <td>CPF</td>
            <td>RG</td>
            <td class="text-center">Ação</td>
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
                <td colspan="2" ><a  href='edita_leitores.php?cod_leitor=<?php echo $dados['cod_leitor'] ?>'>Editar</a>
                <a href='#' onclick='confirmar("<?php echo $dados['cod_leitor'] ?>")'>Excluir</a></td>
            </tr>
           
        <?php } ?>
        </table>
        <br>
    <a class="btn" href="leitores.php">Cadastrar novo</a>
</div>
<script>
    function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = 'exclui_leitor.php?cod_leitor=' + cod;
    }
</script>
</body>
</html>