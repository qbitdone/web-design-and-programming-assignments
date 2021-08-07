<?php
/* Smarty version 3.1.39, created on 2021-05-24 20:34:20
  from 'C:\xampp\htdocs\zadaca_04\templates\obrazac.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abf1ac8b8675_63073595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8486a87577014eed127a81c89cd6c0db625aa4b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\obrazac.tpl',
      1 => 1621880613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60abf1ac8b8675_63073595 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Obrazac">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; obrazac; borac; boja;">
  <link rel="stylesheet" href="../css/kculina.css">
  <link rel="stylesheet" href="../css-obrazac.php">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <title>Obrazac</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzajObrazac">OBRAZAC</a></div>
    <div class="nav">
    <a href="../plan.html">PLAN</a>
    <a href="../testBrzine.html">TEST</a>
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


  <div class="obrazacGlavna">

    <section id="sadrzajObrazac">

      <h2 class="tekst">OBRAZAC</h2>
      <h3>Ispunite obrazac i osvojite ulaznicu za sljedeći UFC event</h3>
      <div id="upozorenje"> 
              <p><?php echo $_SESSION['upozorenje'];?>
</p>
      </div>
      <form name="obrazac" id="obrazac" method="get"
        action="obrazac.php">
        <fieldset>
        <legend style="text-align: center; padding-bottom: 20px; font-size: 100%; color:#252525; font-family: 'Cairo', sans-serif;" >OPĆI PODATCI O BORBI</legend>
        <label for="prviBorac">PLAVI BORAC: </label> <br>
        <input type="text" id="prviBorac" name="prviBorac" value=<?php echo $_SESSION['plavi'];?>
> <br>
        <label for="drugiBorac">CRVENI BORAC: </label> <br>
        <input type="text" id="drugiBorac" name="drugiBorac" value=<?php echo $_SESSION['crveni'];?>
> <br>
        <label for="datum">DATUM BORBE: </label> <br>
        <input id="datum" type="text" name="datum" value=<?php echo $_SESSION['datum'];?>
><br>
        <label for="vrijeme">VRIJEME BORBE: </label> <br>
        <input id="vrijeme" type="text" name="vrijeme" value=<?php echo $_SESSION['vrijeme'];?>
><br>
      </fieldset>
        <label>KATEGORIJA BORBE: </label>
        <div class="kategorije">
        <?php if ($_SESSION['kategorija'] == "FLYWEIGHT") {?>
          <input type="radio" id="FLYWEIGHT" name="kategorija" checked value="FLYWEIGHT">
          <label for="FLYWEIGHT">FLYWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="FLYWEIGHT" name="kategorija" value="FLYWEIGHT">
          <label for="FLYWEIGHT">FLYWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "BANTAMWEIGHT") {?>
          <input type="radio" id="BANTAMWEIGHT" name="kategorija" checked value="BANTAMWEIGHT">
          <label for="BANTAMWEIGHT">BANTAMWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="BANTAMWEIGHT" name="kategorija"value="BANTAMWEIGHT">
          <label for="BANTAMWEIGHT">BANTAMWEIGHT</label> <br>  
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "FEATHERWEIGHT") {?>
        <input type="radio" id="FEATHERWEIGHT" name="kategorija" checked value="FEATHERWEIGHT">
          <label for="FEATHERWEIGHT">FEATHERWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="FEATHERWEIGHT" name="kategorija" value="FEATHERWEIGHT">
          <label for="FEATHERWEIGHT">FEATHERWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "LIGHTWEIGHT") {?>
          <input type="radio" id="LIGHTWEIGHT" name="kategorija" checked value="LIGHTWEIGHT">
          <label for="LIGHTWEIGHT">LIGHTWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="LIGHTWEIGHT" name="kategorija" value="LIGHTWEIGHT">
          <label for="LIGHTWEIGHT">LIGHTWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "WELTERWEIGHT") {?>
          <input type="radio" id="WELTERWEIGHT" name="kategorija" checked value="WELTERWEIGHT">
          <label for="WELTERWEIGHT">WELTERWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="WELTERWEIGHT" name="kategorija" value="WELTERWEIGHT">
          <label for="WELTERWEIGHT">WELTERWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "MIDDLEWEIGHT") {?>
          <input type="radio" id="MIDDLEWEIGHT" name="kategorija" checked value="MIDDLEWEIGHT">
          <label for="MIDDLEWEIGHT">MIDDLEWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="MIDDLEWEIGHT" name="kategorija" value="MIDDLEWEIGHT">
          <label for="MIDDLEWEIGHT">MIDDLEWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "LIGHTHEAVYWEIGHT") {?>
          <input type="radio" id="LIGHTHEAVYWEIGHT" name="kategorija" checked value="LIGHTHEAVYWEIGHT">
          <label for="LIGHTHEAVYWEIGHT">LIGHTHEAVYWEIGHT</label> <br>
        <?php } else { ?>
          <input type="radio" id="LIGHTHEAVYWEIGHT" name="kategorija" value="LIGHTHEAVYWEIGHT">
          <label for="LIGHTHEAVYWEIGHT">LIGHTHEAVYWEIGHT</label> <br>
        <?php }?>
        <?php if ($_SESSION['kategorija'] == "HEAVYWEIGHT") {?>
          <input type="radio" id="HEAVYWEIGHT" name="kategorija" checked value="HEAVYWEIGHT">
          <label for="HEAVYWEIGHT">HEAVYWEIGHT</label> <br>
          <?php } else { ?>
            <input type="radio" id="HEAVYWEIGHT" name="kategorija" value="HEAVYWEIGHT">
          <label for="HEAVYWEIGHT">HEAVYWEIGHT</label> <br>
        <?php }?>
        </div>
        <label for="Sudci">Sudci koji su bodovali meč:</label> <br>
        <div class="sudci">
          <select id="Sudci" name="Sudci[]" multiple size="3">
            <optgroup label="Amerika">
            <?php if ($_SESSION['eduardo'] == true) {?>
              <option selected value="Eduardo Herdy">Eduardo Herdy</option>
            <?php } else { ?>
              <option value="Eduardo Herdy">Eduardo Herdy</option>
            <?php }?>
            <?php if ($_SESSION['glenn'] == true) {?>
              <option selected value="Glenn Trowbridge">Glenn Trowbridge</option>
            <?php } else { ?>
              <option value="Glenn Trowbridge">Glenn Trowbridge</option>
            <?php }?>
            <?php if ($_SESSION['osiris'] == true) {?>
              <option selected value="Osiris Maia">Osiris Maia</option>
            <?php } else { ?>
              <option  value="Osiris Maia">Osiris Maia</option>
            <?php }?>
            <?php if ($_SESSION['tony'] == true) {?>
            <option selected value="Tony Weeks">Tony Weeks</option>
            <?php } else { ?>
              <option value="Tony Weeks">Tony Weeks</option>
            <?php }?>
            <?php if ($_SESSION['jospeh'] == true) {?>
              <option selected value="Jospeh Terell">Jospeh Terell</option>
            <?php } else { ?>
              <option value="Jospeh Terell">Jospeh Terell</option>
            <?php }?>
            </optgroup>
            <optgroup label="Europa">
            <?php if ($_SESSION['hallison'] == true) {?>
              <option selected value="Hallison Potterns">Hallison Potterns</option>
            <?php } else { ?>
              <option value="Hallison Potterns">Hallison Potterns</option>
            <?php }?>
            <?php if ($_SESSION['otto'] == true) {?>
            <option selected value="Otto Toriero">Otto Toriero</option>
            <?php } else { ?>
            <option value="Otto Toriero">Otto Toriero</option>
            <?php }?>
            <?php if ($_SESSION['alessandro'] == true) {?>
            <option selected value="Alessandro Veirera">Alessandro Veirera</option>
            <?php } else { ?>
            <option  value="Alessandro Veirera">Alessandro Veirera</option>
            <?php }?>
            <?php if ($_SESSION['leon'] == true) {?>
            <option selected value="Leon Brid">Leon Brid</option>
            <?php } else { ?>
            <option value="Leon Brid">Leon Brid</option>
            <?php }?>
            </optgroup>
          </select>
        </div>

        <br>
        <fieldset>
          <legend style="text-align: center; padding-bottom: 20px; font-size: 100%; color:#252525; font-family: 'Cairo', sans-serif;" >OSOBNE INFORMACIJE</legend>
        <label for="ocjenaBorbe">OCJENA BORBE:</label> <br>
        <div class="ocjenaBorbe">
          <input type="range" id="ocjenaBorbe" name="ocjenaBorbe" min="0" max="100" value=<?php echo $_smarty_tpl->tpl_vars['ocjena']->value;?>
><br>
        </div>
        <label for="bojaHlaca">NAJDRAŽA BOJA UFC KRATKIH HLAČA: </label> <br>
        <div class="boja">
          <input type="color" id="bojaHlaca" name="bojaHlaca" value=<?php echo $_SESSION['boja'];?>
> <br>
        </div>
        <label for="pogledaliBorbu">JESTE LI POGLEDALI BORBU VIŠE OD 1 PUT:</label> <br>
        <div class="check">
        <?php if (!empty($_SESSION['borba_pogledana'])) {?>
          <input type="checkbox" id="pogledaliBorbu" name="pogledaliBorbu" checked value="da"> <br>
          <label for="pogledaliBorbu"> DA</label> <br>
        <?php } else { ?>
          <input type="checkbox" id="pogledaliBorbu" name="pogledaliBorbu" value="da"> <br>
          <label for="pogledaliBorbu"> DA</label> <br>
        <?php }?>
        </div>
        <div class="detaljborbe">
          <label for="detalj">NAJZANIMLJIVIJI DETALJ BORBE: </label> <br>
          <textarea id="detalj" name="detalj" cols="30" rows="10"><?php echo $_SESSION['detalj_borbe'];?>
</textarea> <br>
        </div>
      </fieldset>
        <div class="gumb-posalji">
          <input type="submit" value="Pošalji" name="submit">
        </div>
        <div class="gumb-azuriraj">
         <input type="submit" value="Ažuriraj podatke u tablici" name="azuriraj" class='gumbi'>
        </div>
            <div> 
              <p><?php echo $_SESSION['greskovski'];?>
</p>
    </div>
      </form>
    </section>
  </div>

<?php if ($_SESSION['uloga'] == 4) {?>
    <form class="skripta-container" method="post"> 
  <label for="myfile">Odaberite datoteku:</label>
  <input type="file" id="myfile" name="myfile">
  <label for="email">Unesite mail:</label>
  <input type="email" id="email" name="email">
  <input type="submit" value="Napravi sigurnosnu kopiju" name="napravi-sig-ko" class='gumbi'>
  <input type="submit" value="Vrati sigurnosnu kopiju" name="vrati-sig-ko" class='gumbi'>
  </form>
<?php }?>

  <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/obrazac.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/obrazac.html">
    <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55"/>
    </a>
  </footer>

</body>

</html><?php }
}
