<?php
require '../vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';
require '../baza.class.php';
session_start();
$base = new Baza();
$base->spojiDB();
error_reporting(0);
// kad uploadam na barku promjenit sve nazive dz4 u DZ4!!!
switch($_SESSION['uloga'])
{
  case 1: {
    if(!isset($_SERVER['HTTP_REFERER'])){
      header('location:prijava.php');
      exit;
    }
    break;
  }
  case 2: {
    if(!isset($_SERVER['HTTP_REFERER'])){
      header('Location: ../galerija.php');
      exit;
    }
    break;
  }
}
$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
if($pageRefreshed == 1){
   unset($_SESSION['id']);
}

function jeRegex($string)
{
 $regex = "/^(((0[1-9])|(1[012])):[0-5][0-9]:[0-5]\d\s[AP]M)|((([01]\d)|(2[0-3])):[0-5][0-9]:[0-5]\d)$/";
 return preg_match($regex,$string);
}
$_SESSION['greskovski'] = "";

$_SESSION['provDatum'] = true;
$_SESSION['provVrijeme'] = true;
$_SESSION['provPadajuci'] = true;

if (isset($_GET["submit"])) {
  $uspjeh = false;
  $prvi = $_GET['prviBorac'];
  $drugi = $_GET['drugiBorac'];
  $date = $_GET['datum'];
  $vrijeme = $_GET['vrijeme'];
  $kategorija = $_GET['kategorija'];
  $sudci = "";
  $brojevski = 0;
  foreach ($_GET['Sudci'] as $sudac) {
    $brojevski++;
    $sudci.=$sudac. ";";
  }
  if($date[0] >= 0 && $date[0] <= 3)
  {
    if($date[1] >= 0 && $date[1] <= 9)
    {
      if($date[2] == '.')
      {
        if($date[3] >= 0 && $date[3] <= 3)
        {
          if($date[4] >= 0 && $date[4] <= 9)
          {
            if($date[5] == '.')
            {
              if($date[6] >= 0 && $date[6] <= 9)
              {
                if($date[7] >= 0 && $date[7] <= 9)
                {
                  if($date[8] >= 0 && $date[8] <= 9)
                  {
                    if($date[9] >= 0 && $date[9] <= 9)
                    {
                      if($date[10] == '.')
                      {
                        if(strlen($date) == 11)
                        {
                            $uspjeh = true;
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }

  $ocjena = $_GET['ocjenaBorbe'];
  $boja = $_GET['bojaHlaca'];
  $pogledali = $_GET['pogledaliBorbu'];
  $detalj = $_GET['detalj'];
  if (!$uspjeh)
  {
    $_SESSION['provDatum'] = false;
  }
  if(!jeRegex($vrijeme))
  {
    $_SESSION['provVrijeme'] = false;
  }
  if($brojevski < 2)
  {
    $_SESSION['provPadajuci'] = false;
  }
  if($uspjeh && jeRegex($vrijeme) && $brojevski >= 2)
  {
  $upit = "INSERT INTO dz4_obrazac VALUES (default,'$prvi', '$drugi','$date', '$vrijeme', '$kategorija', '$sudci', '$ocjena', '$boja', '$pogledali', '$detalj');";
  $base->updateDB($upit);
  $_SESSION['provDatum'] = true;
  $_SESSION['provVrijeme'] = true;
  $_SESSION['provPadajuci'] = true;

  $_SESSION['greskovski'] = "Obrazac je uspješno popunjen i poslan!";
  header("Location: ../index.php");
  die();
  }
  else{
    $_SESSION['greskovski'] = "Neuspjeh! Datum i/ili vrijeme i/ili padajući izbornik nisu ispravno uneseni!";
  } 
}


if(isset($_POST["napravi-sig-ko"]))
{ 
  $file = fopen("culinovski.sql", "w");
  $upit = "SELECT * FROM dz4_obrazac";
  $upit = $base->selectDB($upit);
  $count = mysqli_num_rows($upit);
  for($i = 0; $i < $count; $i++)
  {
    $red = mysqli_fetch_assoc($upit);
    $id = $red['id_obrazac'];
    $prvi = $red['plavi_borac'];
    $drugi = $red['crveni_borac'];
    $date = $red['datum'];
    $vrijeme = $red['vrijeme'];
    $kategorija = $red['kategorija'];
    $sudci = $red['sudac'];
    $ocjena = $red['ocjena'];
    $boja = $red['boja'];
    $pogledali = $red['borba_pogledana'];
    $detalj = $red['detalj_borbe'];
/*
    $text .= "INSERT INTO dz4_obrazac VALUES (" .  '$id' .',' .  $prvi .',' . $drugi . 
            ',' . $date . ',' . $vrijeme . ',' . $kategorija . ',' . $sudci . ',' . $ocjena . ',' 
            . $boja . ',' . $pogledali . ',' . $detalj . ");\n"; */
    $text .= "INSERT INTO dz4_obrazac VALUES ('$id','$prvi', '$drugi','$date', '$vrijeme', '$kategorija','$sudci', '$ocjena', '$boja', '$pogledali', '$detalj');\n";
  }
  fwrite($file, $text);

  if(!empty($_POST['email']))
    {
        $msg = "Napravljena je sigurnosna kopija!";
        mail($_POST['email'], "SK - kculina", $msg);
    }

  fclose($file);  
  header("Location: obrazac.php");
  exit();
}

if(isset($_POST["vrati-sig-ko"]))
{
  if(!empty($_POST["myfile"]))
  {
    $upitovski = "DELETE FROM dz4_obrazac";
    $base->updateDB($upitovski);
  
    $myfilezz = $_POST["myfile"];
    $stream = fopen($myfilezz, "r");

    while(($line=fgets($stream))!==false) 
    { 
      $base->updateDB($line);
    } 

    if(!empty($_POST['email']))
    {
        $msg = "Podatci su vraćeni iz sigurnosne kopije!";
        mail($_POST['email'], "SK - kculina", $msg);
    }
    fclose($myfilezz);
  }
}
/*
$_SESSION['plavi'] = "";
unset($_SESSION['crveni']);
unset($_SESSION['datum']);
unset($_SESSION['vrijeme']);
unset($_SESSION['kategorija']);
unset($_SESSION['sudac']);
unset($_SESSION['ocjena']);
unset($_SESSION['boja']);
unset($_SESSION['borba_pogledana']);
unset($_SESSION['detalj_borbe']);
*/

if(!isset($_SESSION['id']) || $_SESSION['uloga'] != 4)
{
  $_SESSION['plavi'] = "";
  $_SESSION['crveni'] = "";
  $_SESSION['datum'] = "";
  $_SESSION['vrijeme'] = "";
  $_SESSION['kategorija'] = "";
  $_SESSION['sudac'] = "";
  $_SESSION['ocjena'] = "";
  $_SESSION['boja'] = "";
  $_SESSION['borba_pogledana'] = "";
  $_SESSION['detalj_borbe'] = "";
  $_SESSION['eduardo'] = false;
  $_SESSION['glenn'] = false;
  $_SESSION['osiris'] = false;
  $_SESSION['tony'] = false;
  $_SESSION['jospeh'] = false;
  $_SESSION['hallison'] = false;
  $_SESSION['otto'] = false;
  $_SESSION['alessandro'] = false;
  $_SESSION['leon'] = false;

}
if(isset($_SESSION['id']) && $_SESSION['uloga'] == 4)
{
  $id = $_SESSION['id'];
  $upit = "SELECT * FROM dz4_obrazac WHERE id_obrazac = $id";
  $upit = $base->selectDB($upit);
  $rez = mysqli_fetch_assoc($upit);
  $_SESSION['plavi'] = $rez['plavi_borac'];
  $_SESSION['crveni'] = $rez['crveni_borac'];
  $_SESSION['datum'] = $rez['datum'];
  $_SESSION['vrijeme'] = $rez['vrijeme'];
  $_SESSION['kategorija'] = $rez['kategorija'];
  $_SESSION['sudac'] = $rez['sudac'];
  $_SESSION['ocjena'] = $rez['ocjena'];
  $_SESSION['boja'] = $rez['boja'];
  $_SESSION['borba_pogledana'] = $rez['borba_pogledana'];
  $_SESSION['detalj_borbe'] = $rez['detalj_borbe'];
  $sudciPo = explode(';', $_SESSION['sudac']);
  
  $_SESSION['eduardo'] = false;
  $_SESSION['glenn'] = false;
  $_SESSION['osiris'] = false;
  $_SESSION['tony'] = false;
  $_SESSION['jospeh'] = false;
  $_SESSION['hallison'] = false;
  $_SESSION['otto'] = false;
  $_SESSION['alessandro'] = false;
  $_SESSION['leon'] = false;

  $_SESSION['sudac'] = $sudciPo;

foreach($_SESSION['sudac'] as $sudac)
{
  if ($sudac == "Eduardo Herdy")
  {
    $_SESSION['eduardo'] = true;
  }
  if ($sudac == "Glenn Trowbridge")
  {
    $_SESSION['glenn'] = true;
  }
  if ($sudac == "Osiris Maia")
  {
    $_SESSION['osiris'] = true;
  }
  if ($sudac == "Tony Weeks")
  {
    $_SESSION['tony'] = true;
  }
  if ($sudac == "Jospeh Terell")
  {
    $_SESSION['jospeh'] = true;
  }
  if ($sudac == "Hallison Potterns")
  {
    $_SESSION['hallison'] = true;
  }
  if ($sudac == "Otto Toriero")
  {
    $_SESSION['otto'] = true;
  }
  if ($sudac == "Alessandro Veirera")
  {
    $_SESSION['alessandro'] = true;
  }
  if ($sudac == "Leon Brid")
  {
    $_SESSION['leon'] = true;
  }
}
} 


if(isset($_GET['azuriraj']) && $_SESSION['uloga'] == 4)
{
  $id_ob = $_SESSION['id'];

  $prvi = $_GET['prviBorac'];
  $drugi = $_GET['drugiBorac'];
  $date = $_GET['datum'];
  $vrijeme = $_GET['vrijeme'];
  $kategorija = $_GET['kategorija'];
  $ocjena = $_GET['ocjenaBorbe'];
  $boja = $_GET['bojaHlaca'];
  $pogledali = $_GET['pogledaliBorbu'];
  $detalj = $_GET['detalj'];
  $uspjeh = false;
  $brojevski = 0;
  $sudci = "";
  foreach ($_GET['Sudci'] as $sudac) {
    $sudci.=$sudac. ";";
    $brojevski++;
  }
  if($date[0] >= 0 && $date[0] <= 3)
  {
    if($date[1] >= 0 && $date[1] <= 9)
    {
      if($date[2] == '.')
      {
        if($date[3] >= 0 && $date[3] <= 3)
        {
          if($date[4] >= 0 && $date[4] <= 9)
          {
            if($date[5] == '.')
            {
              if($date[6] >= 0 && $date[6] <= 9)
              {
                if($date[7] >= 0 && $date[7] <= 9)
                {
                  if($date[8] >= 0 && $date[8] <= 9)
                  {
                    if($date[9] >= 0 && $date[9] <= 9)
                    {
                      if($date[10] == '.')
                      {
                        if(strlen($date) == 11)
                        {
                            $uspjeh = true;
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
  if (!$uspjeh)
  {
    $_SESSION['provDatum'] = false;
  }
  if(!jeRegex($vrijeme))
  {
    $_SESSION['provVrijeme'] = false;
  }
  if($brojevski < 2)
  {
    $_SESSION['provPadajuci'] = false;
  }
  if($uspjeh && jeRegex($vrijeme) && $brojevski >= 2)
  {
    $upit = "UPDATE dz4_obrazac SET plavi_borac = '$prvi', crveni_borac = '$drugi', datum = '$date', vrijeme = '$vrijeme', kategorija = '$kategorija', sudac = '$sudci', ocjena='$ocjena', boja = '$boja', borba_pogledana = '$pogledali', detalj_borbe = '$detalj' WHERE id_obrazac = $id_ob;";
    $base->updateDB($upit);
    $_SESSION['provDatum'] = true;
    $_SESSION['provVrijeme'] = true;
    $_SESSION['provPadajuci'] = true;

  $_SESSION['greskovski'] = "Obrazac je uspješno popunjen i poslan!";
  header("Location: ../index.php");
  die();
  }
  else{
    $_SESSION['greskovski'] = "Neuspjeh! Datum i/ili vrijeme i/ili padajući izbornik nisu ispravno uneseni!";
    $_SESSION['popod'] = true;
  }
} 

if($_SESSION['popod'] == false)
{
  unset($_SESSION['id']);
}

if($_SESSION['popod'] == true)
{
  $_SESSION['popod'] = false;
}


$smarty = new Smarty();
$smarty->assign('prvid',$_SESSION['prvid']);
$smarty->assign('plavi',$_SESSION['id']);
$smarty->assign('crveni',$_SESSION['crveni']);
$smarty->assign('datum',$_SESSION['datum']);
$smarty->assign('vrijeme',$_SESSION['vrijeme']);
$smarty->assign('kategorija',$_SESSION['kategorija']);
$smarty->assign('sudac',$_SESSION['sudac']);
$smarty->assign('ocjena',$_SESSION['ocjena']);
$smarty->assign('boja',$_SESSION['boja']);
$smarty->assign('borba_pogledana',$_SESSION['borba_pogledana']);
$smarty->assign('detalj_borbe',$_SESSION['detalj_borbe']);
$smarty->assign('eduardo',$_SESSION['eduardo']);
$smarty->assign('glenn',$_SESSION['glenn']);
$smarty->assign('osiris',$_SESSION['osiris']);
$smarty->assign('tony',$_SESSION['tony']);
$smarty->assign('jospeh',$_SESSION['jospeh']);
$smarty->assign('hallison',$_SESSION['hallison']);
$smarty->assign('otto',$_SESSION['otto']);
$smarty->assign('alessandro',$_SESSION['alessandro']);
$smarty->assign('leon',$_SESSION['leon']);
$smarty->assign('greskovski',$_SESSION['greskovski']);
$smarty->display('../templates/obrazac.tpl');



