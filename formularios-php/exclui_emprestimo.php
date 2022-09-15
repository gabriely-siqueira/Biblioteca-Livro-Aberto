<html>
<?php
include('conexao.php');

$cod_emprestimo = $_GET['cod_emprestimo'];

if (isset($_POST['submit'])) {
    $nome_leitor = $_POST['nome_leitor'];
    $nome_livro = $_POST['nome_livro'];
    $data_hoje = $_POST['data_hoje'];
    $data_entrega = $_POST['data_entrega'];

    $sql = "UPDATE users SET 
                nome_leitor='$nome_leitor', 
                nome_livro='$nome_livro', 
                data_hoje='$data_hoje',
                data_entrega='$data_entrega' 
            WHERE cod_emprestimo='$cod_emprestimo'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Empréstimo alterado com sucesso.') </script>";
        header("Location: lista_emprestimo.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM emprestimos WHERE cod_emprestimo=$cod_emprestimo";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>

