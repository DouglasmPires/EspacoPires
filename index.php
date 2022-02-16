
<?php

//a função get resgata váriaveis direto da barra de endereço assim podemos passar uma váriavel entre páginas sem a necessidade de trabalhar com cookies ou sessão.
//a função isset pode ser usada como um if para verificar se existe ou não uma váriavel
// nessa situação verificao se existe uma váriavel na barra de endereço com nome mod se existir a $pagina recebe a variavel da barra de endereço, se não, recebe '';

$pagina = isset($_GET['mod'])?$_GET['mod']:"";
//$pagina = isset($_GET['modEscola'])?$_GET['modEscola']:'';



 ?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Guarda Chuva Espacial</title>
    <link rel="icon" type="imagem/png" href="Imagens/GuardaChuvaEspacial.png" />
    <!-- Bootstrap CSS CDN -->
<?php
include 'bootstrap.html'
?>

<style>
@font-face {
  font-family: "knewave";
  src: url("Fonts/knewave.woff") format("woff"),
       url("Fonts/knewave.ttf") format("ttf");

}

  body {
    background-color: #091926;
  }

  li {

    font-size: 30px;
    font-family: knewave;
  }
  .identificador {

    font-size: 25px;
    font-family: knewave;
    color: #38BDF2;
  }

  .cor {
    color: #38BDF2;
  }


  p {
    align: center;
    font-weight: bold;
    color: #38BDF2;
    font-size: 30px;

  }

  span {
    align: center;
    color: #38BDF2;
    font-family: arial, sans-serif;
  }

.button {     
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;        
}

  </style>


</head>

<body>
  <nav class="navbar navbar-inverse" style="background-color:#0C0C0C;" style="align:center;">
    <div class="container-fluid">

      <div class="navbar-header">
        <a class="navbar-brand" ></a>  <img src="Imagens/GuardaChuvaEspacial.png"  width=100px height=100px>
      </div >

      <ul class="nav navbar-nav" >

        <li><a href="./index.php?p=Conteudo/Home/home.php">HOME</a></li>
        <li><a href="./index.php?p=Conteudo/PodCast/Episodios.php" >PodCast</a></li>
        <li><a href="./index.php?p=Conteudo/Importante/Importantes.php">Importante</a></li>-->
      </ul>
    </div>


  </nav>

  <footer class="footer navbar-fixed-bottom  navbar-inverse" style="background-color:#0C0C0C;">
<div class="identificador container">
  <div class="col-sm-6">guardachuvaespacial@gmail.com</div>
  
  <div class="col-sm-4" align="ri">
<a href="https://www.facebook.com/GuardaChuvaEspacial/" target="_blank">
    <button type="button" class="btn btn-primary button"><img src="Imagens/Icones/face.png" height=32px  width=32px></button> 
</a>    
<a href="https://www.instagram.com/guardachuvaespacial/" target="_blank">
    <button type="button" class="btn btn-primary button"><img src="Imagens/Icones/insta.png" height=32px  width=32px></button>
</a>



  </div>




  <div class="col-sm-4"></div>
</div>
  </footer>

<?php

@ $pagina = $_GET['p']?$_GET['p']:"Conteudo/Home/home.php";

 if(isset($pagina)){
   include $pagina;
 }Else{


 }
?>
</body>

</html>
