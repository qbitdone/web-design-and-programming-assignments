<?php 
session_start();
header("Content-type: text/css"); 

$dkgray = '#333';
if ($_SESSION['provDatum'] == false)
{
  $datumP = '#333';
}
else{
  $datumP = '#db143c';
}
if ($_SESSION['provVrijeme'] == false)
{
  $vrijemeP = '#333';
}
else{
  $vrijemeP = '#db143c';
}
if ($_SESSION['provPadajuci'] == false)
{
  $padajuciP = '#333';
}
else{
  $padajuciP = '#db143c';
}

?>
#datum{
  border-color: <?=$datumP?>;
}
#vrijeme{
  border-color: <?=$vrijemeP?>;
}
#Sudci{
  border-color: <?=$padajuciP?>;
}


