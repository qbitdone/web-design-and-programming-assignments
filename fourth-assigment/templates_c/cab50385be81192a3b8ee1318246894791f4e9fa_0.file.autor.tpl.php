<?php
/* Smarty version 3.1.39, created on 2021-05-22 18:12:34
  from 'C:\xampp\htdocs\zadaca_04\templates\autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a92d724e9378_26657186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cab50385be81192a3b8ee1318246894791f4e9fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\autor.tpl',
      1 => 1621697861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a92d724e9378_26657186 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Autor">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; autor; mma; kristijan;">
  <link rel="stylesheet" href="css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap"
    rel="stylesheet">
  <title>Autor</title>
  <style>
    [id="izvor"]{
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .inner, .paragraf{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 19px;
      word-spacing: 35px;
      letter-spacing: 12px;
      
    }
  </style>
</head>

<body>
  <div id="pristupacnost">
    <div class="pristup">
      <a href="#pristupacnost">Pristupacnost</a>
    </div>
    <div class="header">
      <div class="container"><a href="#sadrzaj-autor">AUTOR</a></div>
      <div class="nav">
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
        <a href="https://www.facebook.com/" target="_blank"><img src="multimedija/facebook.png" alt="" class="some">
        </a>
        <a href="rss.php"><img src="multimedija/rss.png" alt="" class="some"></a>
      </div>
    </div>
    <section>
      <div class="inner">
        <div class="omeni">
          <p><span>IME:</span> Kristijan Čulina <br> <span>EMAIL: </span><a style="color: brown;"
              href="mailto:kculina@foi.hr">kculina@foi.hr</a><br>
            <span>SMJER:</span> Informacijski Sustavi
          </p>
          <img src="multimedija/ja.jpg" alt="">
        </div>
      </div>

      <section id="sadrzaj-autor">
        <div class="paragraf">
          <div class="sadrzaj">
            <h1 style="text-align: center;">SADRŽAJ</h1>
            <p>"Posebno sam sretan jer ću se boriti u Koelnu, u Njemačkoj. Htio sam dati svojim hrvatskim navijačima
              priliku vidjeti me bez da plate avionsku kartu. To je otprilike osam sati vožnje od Zagreba i mislim da će
              se puno ljudi odlučiti za put. Mogla bi biti dobra zabava da se tri ili četiri prijatelja skupe u jedan
              auto i naprave jedan mali izlet. Drago mi je zbog toga i to je bio jedan od razloga jer sam Danu molio da
              me stavi na ovaj turnir"</p>
            <div style="margin-left: 20%;" class="mirko">- Mirko "CroCop" Filipović</div>
            <br><a
              href="https://www.index.hr/sport/clanak/cro-cop-nadam-se-da-ce-me-hrvatski-navijaci-doci-podrzati-u-koeln/437240.aspx"
              style="color: brown;" target="_blank" id="izvor">Izvor</a>
            <h2>OPIS</h2>
            <p>MMA je borbeni sport s punim kontaktom koji omogućuje udaranje i grappling, kako stojeći tako i na tlu,
              koristeći tehnike iz raznih borbenih sportova i borilačkih vještina. Pobjeda u meču obično se ostavaruje
              odlukom sudaca nakon što je proteklo određeno vrijeme, prekidom suca (na primjer, ako se natjecatelj ne
              može
              inteligentno obraniti), prekidom liječnika (zbog ozljede), predajom od strane natjecateljevog trenera
              bacanjem
              ručnika ili nokautom.
            </p>
          </div>
        </div>
      </section>

      <section id="video-sekcija">
        <div class="video">
          <iframe src="https://www.youtube.com/embed/0rvIV_DGT1M?autoplay=1&mute=1">
          </iframe>
        </div>
      </section>
    </section>
  </div>

  <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/autor.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/autor.html">
    <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55"/>
    </a>
  </footer>

</body>

</html><?php }
}
