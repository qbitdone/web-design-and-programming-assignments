<?php
/* Smarty version 3.1.39, created on 2021-05-22 17:53:47
  from 'C:\xampp\htdocs\zadaca_04\templates\registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9290b443313_35785182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d02941499f2ee994fb41a4d1b2a683db501149' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\registracija.tpl',
      1 => 1621698327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a9290b443313_35785182 (Smarty_Internal_Template $_smarty_tpl) {
?>!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Registracija">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; registracija; ime; prezime;">
  <link rel="stylesheet" href="../css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap"
    rel="stylesheet">
  <title>Registracija</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#registracija-sadrzaj">REGISTRACIJA</a></div>
    <div class="nav">
       <?php if ($_SESSION['uloga'] == 1) {?>
      <a href="registracija.php">REGISTRACIJA</a>
      <a href="prijava.php">PRIJAVA</a>
    <?php }?>
    <?php if ($_SESSION['uloga'] > 1) {?>
      <a href="../galerija.php">GALERIJA</a>
      <a href="../autor.php">AUTOR</a>
      <a href="../odjava.php">ODJAVI SE</a>
    <?php }?>
    <?php if ($_SESSION['uloga'] > 2) {?>
      <a href="../index.php">POČETNA</a>
      <a href="obrazac.php">OBRAZAC</a>
    <?php }?>
    </div>
    <div class="logo">
      <a href="https://www.instagram.com/" target="_blank"><img src="../multimedija/instagram.png" alt="" class="some">
      </a>
      <a href="https://www.facebook.com/" target="_blank"><img src="../multimedija/facebook.png" alt="" class="some">
      </a>
      <a href="../rss.php"><img src="../multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>


  <section id="registracija-sadrzaj">
    <div class="registracijaGlavna">
      <section id="sadrzajRegistracije">
        <h2 class="tekst">REGISTRACIJA</h2>
        <form name="registracija" id="registracija" method="post"
          action="">
          <label for="ime">IME: </label> <br>
          <input id="ime" name="ime" type="text" placeholder="Unesite ime"/><br>
          <label for="prezime">PREZIME: </label> <br>
          <input id="prezime" name="prezime" type="text" placeholder="Unesite prezime" /><br>
          <label for="korime">KORISNIČKO IME: </label> <br>
          <input id="korime" name="korime" type="text" placeholder="Unesite korisničko ime"  /><br>
          <label for="email">eMAIL:</label> <br>
          <input id="email" name="email" type="email" placeholder="Unesite email" /><br>
          <label for="lozinka">LOZINKA: </label> <br>
          <input id="lozinka" name="lozinka" type="password" placeholder="Unesite lozinku" /><br>
          <label for="potvrdaLozinka">POTVRDA LOZINKE: </label> <br>
          <input id="potvrdaLozinka" name="potvrdaLozinke" type="password" placeholder="Unesite lozinku"  /><br>
          <div class="gumbiRegistracija">
            <input id="prvi" name="submit" type="submit" value="Regitriraj se" />
          </div>
        </form>
      </section>
    </div>
  </section>

  <div> 
              <p><?php echo $_SESSION['greska2'];?>
</p>
          </div>

  <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/registracija.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/registracija.html">
    <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55"/>
    </a>
  </footer>

</body>

</html><?php }
}
