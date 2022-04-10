<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
<form action="recebe_dados.php" method="POST">
<h1>Catálogo de Livros</h1>
    <p>Tipo de material:
   <select name="material">
    <option value="0">Selecione</option>
    <option value="livro">Livro</option>
    <option value="periodico">Periódico</option>
    <option value="artigo">Artigo</option>
    </select>
</p>
    <p> Título:<input type="text" size="35" maxlength="256" name="titulo"></p>
    <p>Categoria:
   <select name="categoria">
    <option value="0">Selecione</option>
    <option value="Artes">Artes</option>
    <option value="Auto ajuda">Auto ajuda</option>
    <option value="Biografia">Biografia</option>
    <option value="Ciências sociais">Ciências sociais</option>
    <option value="Crônica brasileira">Crônica brasileira</option>
    <option value="Culinária">Culinária</option>
    <option value="Cultura">Cultura</option>
    <option value="Dicionário">Dicionário</option>
    <option value="Direito">Direito</option>
    <option value="Educação">Educação</option>
    <option value="Ficção">Ficção Científica</option>
    <option value="Filosofia">Filosofia</option>
    <option value="Geografia">Geografia</option>
    <option value="História">História</option>
    <option value="Línguas">Línguas</option>
    <option value="Literatura alemã">Literatura alemã</option>
    <option value="Literatura argentina espanhola">Literatura argentina espanhola</option>
    <option value="Literatura brasileira">Literatura brasileira</option>
    <option value="Literatura estadunidense">Literatura estadunidense</option>
    <option value="Literatura estrangeira">Literatura estrangeira</option>
    <option value="Literatura francesa">Literatura francesa</option>
    <option value="Literatura infanto juvenil">Literatura infanto juvenil</option>
    <option value="Literatura inglesa">Literatura inglesa</option>
    <option value=" Literatura juvenil">Literatura juvenil</option>
    <option value="Matemática">Matemática</option>
    <option value="Poesia brasileira">Poesia brasileira</option>
    <option value="Psicologia">Psicologia</option>
    <option value="Religião">Religião</option>
    <option value="Romance brasileiro">Romance brasileiro</option>
    <option value="Romance estrangeiro">Romance estrangeiro</option>
    <option value="Saúde">Saúde</option>
    <option value="Teatro brasileiro">Teatro brasileiro</option>
    </select>
</p>
    <p> Autor:<input type="text" size="35" maxlength="256" name="autor"></p>
    <p> Editora:<input type="text" size="35" maxlength="256" name="editora"></p>
    <p> Ano de publicação:<input type="text" size="35" maxlength="256" name="ano"></p>
    <p> Série:<input type="text" size="35" maxlength="256" name="serie"></p>
    <p> Número do ISBN:<input type="text" size="35" maxlength="256" name="ISBN"></p>
    <p>Quantidade de exemplares do livro:
    <select name="exemplares">
    <option value="0">Selecione</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    </p>


    <p><input type="submit" value="Cadastrar"></p>
    <a href="menu.php">Voltar</a>
    </form>
</body>
</html>

 