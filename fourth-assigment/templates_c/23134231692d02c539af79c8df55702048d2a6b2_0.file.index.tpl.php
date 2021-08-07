<?php
/* Smarty version 3.1.39, created on 2021-05-24 18:33:12
  from 'C:\xampp\htdocs\zadaca_04\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60abd5489535b9_86403741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23134231692d02c539af79c8df55702048d2a6b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\index.tpl',
      1 => 1621873989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60abd5489535b9_86403741 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Prijava">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; prijava; lozinka; korisničko">
  <link rel="stylesheet" href="./css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
  <?php echo '<script'; ?>
 defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 defer src="//code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 defer src="//code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 defer src="./javascript/kculina-jquery.js"><?php echo '</script'; ?>
>
  <title>POČETNA</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzaj">POČETNA</a></div>
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
      <a href="https://www.instagram.com/" target="_blank"><img src="./multimedija/instagram.png" alt="" class="some">
      </a>
      <a href="https://www.facebook.com/" target="_blank"><img src="./multimedija/facebook.png" alt="" class="some"> </a>
      <a href="rss.php"><img src="./multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div>



<section id="pocetni-sadrzaj">
      <div class="tablica">
        <table>
          <tr>
          <th>ID</th>
          <th>Prvi borac</th>
          <th>Drugi borac</th>
          <th>Vrijeme</th>
          <th>Detalji</th>
          </tr>
             <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_SESSION['brojac']-1+1 - (0) : 0-($_SESSION['brojac']-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
     <tr>
        <td>
            <form>
               <input type='submit' name=<?php echo $_SESSION['arrayID'][$_smarty_tpl->tpl_vars['i']->value];?>
 value=<?php echo $_SESSION['arrayID'][$_smarty_tpl->tpl_vars['i']->value];?>
>
            </form> 
        </td>
        <td>
          <?php echo $_SESSION['arrayPlavi'][$_smarty_tpl->tpl_vars['i']->value];?>

        </td>
        <td>
          <?php echo $_SESSION['arrayCrveni'][$_smarty_tpl->tpl_vars['i']->value];?>

        </td> 
        <td>
          <?php echo $_SESSION['arrayVrijeme'][$_smarty_tpl->tpl_vars['i']->value];?>

        </td>
        <td> 
          <a href=<?php echo $_SESSION['arrayID'][$_smarty_tpl->tpl_vars['i']->value];?>
 class='detaljiKlik'>Detalji</a>
          </td>
    </tr>
   <?php }
}
?>
        </table>
      </div>


  </section>
  <table id="podatci-tab" class="druga-tablica">
  <tr>
  <th>ID<th>
  <th>Plavi borac<th>
  <th>Crveni borac<th>
  <th>Datum<th>
  <th>Vrijeme<th>
  <th>Kategorija<th>
  <th>Sudac<th>
  <th>Ocjena<th>
  <th>Boja<th>
  <th>Borba pogledana<th>
  <th>Detalj<th>
  </tr>
  </table>
    <footer>
    <p>&copy; 2021 <a href="../autor.html">Kristijan Čulina</a></p>
    <a href="http://validator.w3.org/check?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/prijava.html">
      <img alt="HTML5 logo" src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/HTML5.png" width="50" height="50" />
    </a>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://barka.foi.hr/WebDiP/2020/zadaca_01/kculina/obrasci/prijava.html">
      <img src="https://barka.foi.hr/WebDiP/2020/materijali/zadace/CSS3.png" alt="CSS logo" width="50" height="55" />
    </a>
  </footer>

</body>

</html><?php }
}
