<?php
/* Smarty version 3.1.39, created on 2021-05-24 19:08:38
  from 'C:\xampp\htdocs\zadaca_04\templates\galerija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abdd96e484f9_48628456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85a7598b40dac02f3917b479f4992d2b84c3ded' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\galerija.tpl',
      1 => 1621875740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60abdd96e484f9_48628456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Galerija">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; galerija; khabib; slika">
  <link rel="stylesheet" href="css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap"
    rel="stylesheet">
  <title>Galerija</title>
  <style>
    .image {
      display: inline-block;
      overflow: visible;
      padding: 15px;
    }

    .image img {
      width: 99%;
      transition: 0.25s ease-in-out;
      border: 3px solid rgb(211, 221, 73);
    }

    .image:hover img {
      transform: scale(1.1);
      border: 4px solid rgb(255, 0, 0);
    }

    .gcontainer {
      padding-top: 50px;
      background-color: rgb(161, 161, 161);
      position: relative;
      padding: 7%;
      display: grid;
      grid-template-columns: auto auto auto;
    }

    .image h1 {
      position: absolute;
      padding: 8px;
      color: rgb(253, 253, 253);
      font-size: 20px;
      opacity: 1;
      font-family: 'Cabin', sans-serif;
    }

    .image:hover h1 {
      opacity: 0;
    }
  </style>
</head>

<body>

  <div class="header">
    <div class="container"><a href="#galerija-sadrzaj">GALERIJA</a></div>
    <div class="nav">
        <a href="plan.html">PLAN</a>
    <a href="testBrzine.html">TEST</a>
       <?php if ($_SESSION['uloga'] == 1) {?>
      <a href="obrasci/registracija.php">REGISTRACIJA</a>
      <a href="obrasci/prijava.php">PRIJAVA</a>
    <?php }?>
    <?php if ($_SESSION['uloga'] > 1) {?>
      <a href="galerija.php">GALERIJA</a>
      <a href="autor.php">AUTOR</a>
      <a href="odjava.php">ODJAVI SE</a>
    <?php }?>
    <?php if ($_SESSION['uloga'] > 2) {?>
      <a href="index.php">POČETNA</a>
      <a href="obrasci/obrazac.php">OBRAZAC</a>
    <?php }?>
    </div>
    <div class="logo">
      <a href="https://www.instagram.com/" target="_blank"><img src="multimedija/instagram.png" alt="" class="some">
      </a>
      <a href="https://www.facebook.com/" target="_blank"><img src="multimedija/facebook.png" alt="" class="some"> </a>
      <a href="rss.php"><img src="multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>


  <section id="galerija-sadrzaj">
    <div class="gcontainer">
      <div class="image">
        <h1>Michael Bisping gets KO'ed</h1>
        <img src="multimedija/1.jpg" alt="">
      </div>
      <div class="image">
        <h1>Zabeast</h1>
        <img src="multimedija/2.jpg" alt="">
      </div>
      <div class="image">
        <h1>Khabib Nurmagomedov</h1>
        <img src="multimedija/3.jpg" alt="">
      </div>
      <div class="image">
        <h1>GSP</h1>
        <img src="multimedija/4.jpg" alt="">
      </div>
      <div class="image">
        <h1>Roberto Soldić</h1>
        <img src="multimedija/5.jpg" alt="">
      </div>
      <div class="image">
        <h1>Stipe Miočić</h1>
        <img src="multimedija/6.jpg" alt="">
      </div>
      <div class="image">
        <h1>Yoel Romero</h1>
        <img src="multimedija/7.jpg" alt="">
      </div>
      <div class="image">
        <h1>Jon Jones elbow</h1>
        <img src="multimedija/8.jpg" alt="">
      </div>
      <div class="image">
        <h1>Khabib takedown</h1>
        <img src="multimedija/9.png" alt="">
      </div>
      <div class="image">
        <h1>GSP high kick</h1>
        <img src="multimedija/10.jpg" alt="">
      </div>
      <div class="image">
        <h1>TJ ko'ed Cody</h1>
        <img src="multimedija/11.jpg" alt="">
      </div>
      <div class="image">
        <h1>McTapper</h1>
        <img src="multimedija/12.jpg" alt="">
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/galerija.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a
      href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/galerija.html">
      <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55" />
    </a>
  </footer>

</body>

</html><?php }
}
