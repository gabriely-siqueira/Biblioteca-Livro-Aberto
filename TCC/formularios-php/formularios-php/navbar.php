<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style type="text/css">
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

         nav{
    margin-left:-2%;
    margin-top: -2%;
    margin-bottom: 2%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    background-color: #ffffff;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);
    padding: 0px 5%;
}
nav ul{
    display: flex;
}
 nav ul li{
    margin: 30px;
    font-family:sans-serif;
    color: #505050;
    font-size: 17px;
    font-weight: 700;
 }
 .active{
     font-weight: bold;
     color:#2d2a2a;
    }
nav ul li a{
  color: black;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
  
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #9b7eeb;
}
nav .menu-btn i{
  color: black;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
.logo{
   margin-left: -35px
   
   
   

}

      </style>
   </head>
   <body>
      <nav>
         <div  class="logo">
         <a href="menu.php"><img src="img/logo.jpg"></a>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         <li><a href="./menu.php" >Menu</a></li>
                <li><a href="./livros.php"> Livros</a></li>
                <li><a href="./leitores.php" > Leitores </a></li>
                <li><a href="ajuda.php">Ajuda</a></li>
                <li><a href="./emprestimo.php" title="">Empréstimo</a></li>
                <li><a href="./login.php" title="">Sair</a></li>
         </ul>
      </nav>
      
   </body>
</html>