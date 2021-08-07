<?php
error_reporting(0);
require '../baza.class.php';
require '../vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';

$base = new Baza();
$base->spojiDB();
session_start();
//if (isset($_GET['korime']) && isset($_GET['lozinka']))

if (isset($_GET["submit"])) {
  $rez = "SELECT * FROM dz4_korisnik WHERE korime='$_GET[korime]' AND lozinka='$_GET[lozinka]';";
  $rez = $base->selectDB($rez);

  if (mysqli_num_rows($rez) > 0) {
    $rez = mysqli_fetch_assoc($rez);
    $_SESSION['korime'] = $rez['korime'];
    $_SESSION['uloga'] = $rez['id_uloga'];
    header("Location: ../galerija.php");
    exit();
  } else {
    $_SESSION['greska'] = "Neuspješna prijava pokušajte ponovno!";
  }
}

//

if(isset($_GET["korisnik"]))
{
  $_SESSION['uloga'] = 2;
}
if(isset($_GET["moderator"]))
{
  $_SESSION['uloga'] = 3;
}
if(isset($_GET["admin"]))
{
  $_SESSION['uloga'] = 4;
}
if(!isset($_SESSION['uloga']))
{
  $_SESSION['uloga'] = 1;
}

$smarty = new Smarty();
$smarty->display('../templates/prijava.tpl');
$greska = $_SESSION['greska'];
$uloga = $_SESSION['uloga'];
$smarty->assign('uloga',$uloga);
$smarty->assign('greska',$greska);


if($_SESSION['uloga'] > 1)
{
  header("Location: ../galerija.php");
  exit();
} 
