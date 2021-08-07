<?php

require './vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';
require './baza.class.php';

$base = new Baza();
$base->spojiDB();

session_start();
$smarty = new Smarty();
switch($_SESSION['uloga'])
{
  case 1: {
    if(!isset($_SERVER['HTTP_REFERER'])){
      header('location: ./obrasci/prijava.php');
      exit;
    }
    break;
  }
  case 2: {
    if(!isset($_SERVER['HTTP_REFERER'])){
      header('Location: ./galerija.php');
      exit;
    }
    break;
  }
} 

$upit = "SELECT * FROM dz4_obrazac ORDER BY id_obrazac ASC";
$upit = $base->selectDB($upit);
$dd = array();
$brojac = 0;
$arrayovski = array();
while($red = mysqli_fetch_array($upit))
{
  $dd[$brojac] = $red['id_obrazac'];
  $arrayID[] = $red['id_obrazac'];
  $arrayPlavi[] = $red['plavi_borac'];
  $arrayCrveni[] = $red['crveni_borac'];
  $arrayVrijeme[] = $red['vrijeme'];
   $brojac++;
}
$_SESSION['arrayID'] = $arrayID;
$_SESSION['arrayPlavi'] = $arrayPlavi;
$_SESSION['arrayCrveni'] = $arrayCrveni;
$_SESSION['arrayVrijeme'] = $arrayVrijeme;
$_SESSION['brojac'] = $brojac;

foreach($dd as $id)
{
  if(isset($_GET[$id]))
  {
    $_SESSION['id'] = $id;
    $_SESSION['popod'] = true;
    header('Location: ./obrasci/obrazac.php');
    if($_SESSION["uloga"] == 3)
    {
      $_SESSION['upozorenje'] = "Vi ste moderator, vi ne možete ažurirati tablicu, forma je prebačena u način za dodavanje!";
    }else{
      $_SESSION['upozorenje'] = "";
    }
      exit();

  }
}


$id = $_SESSION['id'];

$smarty->display('./templates/index.tpl');
$smarty->assign('id',$id);
$smarty->assign('arrayID',$_SESSION['arrayID']);
$smarty->assign('arrayPlavi',$_SESSION['arrayPlavi']);
$smarty->assign('arrayCrveni',$_SESSION['arrayCrveni']);
$smarty->assign('arrayVrijeme',$_SESSION['arrayVrijeme']);
$smarty->assign('brojac',$_SESSION['brojac']);
$smarty->assign('upozorenje', $_SESSION['upozorenje']);
$smarty->assign('popod', $_SESSION['id']);
?>


