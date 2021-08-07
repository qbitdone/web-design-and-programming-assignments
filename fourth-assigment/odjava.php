<?php

session_start();
session_unset();
session_destroy();
header("Location: obrasci/prijava.php");

session_start();
$_SESSION['uloga'] = 1;
die();
