
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <main class="login">
      <div class="login__container">
          <img src="img/avatar.png" alt="">
        <h2 class="login__title">Entrar no Livro Aberto</h2>
        <form action="menu.php" method="POST" class="login__form">
          <input class="login__input" type="email" placeholder="e-mail" />
          <span class="login__input-border"></span>
          <input class="login__input" type="password" placeholder="senha"/>
          <span class="login__input-border"></span>
          <button class="login__submit">Login</button>
          
        </form>
      </div>
    </main>
  </body>
</html>