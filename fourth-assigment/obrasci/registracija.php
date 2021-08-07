<?php
require '../vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';
require '../baza.class.php';
error_reporting(0);
$base = new Baza();
$base->spojiDB();

session_start();

if(isset($_POST['submit']))
{
$uspjeh = false;
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korime = $_POST['korime'];
$email = $_POST['email'];
$lozinka = $_POST['lozinka'];
$potvrdaLozinka = $_POST['potvrdaLozinke'];
$salt = "jaCuTePosolitdddddddddddddddddd";
$sha256 = hash('sha256', $lozinka . $salt);
if(!empty($korime) && !empty($email) && !empty($lozinka) && !empty($potvrdaLozinka) && ($lozinka == $potvrdaLozinka))
{
  $upit = "INSERT INTO dz4_korisnik VALUES (default, '2', '$ime', '$prezime', '$korime', '$email', '$lozinka', '$sha256');";
  $base->updateDB($upit);
  $uspjeh = true;
}
else {
  $_SESSION['greska2'] = "Greška, podatci nisu ispravno uneseni!";
} 
}

$smarty = new Smarty();
$smarty->display('../templates/registracija.tpl');
$greska2 = $_SESSION['greska2'];
$smarty->assign('greska2',$greska2);

if($uspjeh)
{
  $_SESSION['uloga'] = 2;
  $uloga = $_SESSION['uloga'];
  $smarty->assign('uloga',$uloga);
  header("Location: ../galerija.php");
  exit();
}

