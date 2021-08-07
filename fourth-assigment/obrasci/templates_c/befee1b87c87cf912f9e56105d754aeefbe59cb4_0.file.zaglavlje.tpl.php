<?php
/* Smarty version 3.1.39, created on 2021-05-15 16:32:42
  from 'C:\xampp\htdocs\zadaca_04\templates\zaglavlje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609fdb8a7c91d4_27066273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'befee1b87c87cf912f9e56105d754aeefbe59cb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zadaca_04\\templates\\zaglavlje.tpl',
      1 => 1621089159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609fdb8a7c91d4_27066273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="naslov" content="Prijava">
  <meta name="autor" content="Kristijan Čulina">
  <meta name="opis" content="23/02/2021; prijava; lozinka; korisničko">
  <link rel="stylesheet" href="../css/kculina.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Syncopate&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
  <title>Prijava</title>
</head>

<body>


  <div class="header">
    <div class="container"><a href="#sadrzaj">PRIJAVA</a></div>
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
      <a href="https://www.facebook.com/" target="_blank"><img src="../multimedija/facebook.png" alt="" class="some"> </a>
      <a href=""><img src="../multimedija/rss.png" alt="" class="some"></a>
    </div>
  </div><?php }
}
