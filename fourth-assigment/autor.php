<?php

require './vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';

session_start();

switch($_SESSION['uloga'])
{
  case 1: {
    if(!isset($_SERVER['HTTP_REFERER'])){
      header('Location: ./obrasci/prijava.php');
      exit;
    }
    break;
  }
} 

$smarty = new Smarty();
$smarty->display('./templates/autor.tpl');
?>
