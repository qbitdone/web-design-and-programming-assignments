<?php

require './vanjske_biblioteke/smarty-3.1.39/libs/Smarty.class.php';

session_start();
$smarty = new Smarty();
$smarty->display('./templates/galerija.tpl');
?>