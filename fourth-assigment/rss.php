<?php
require 'baza.class.php';

$base = new Baza();
$base->spojiDB();

//$upit = "SELECT TOP(10) * FROM dz4_obrazac ORDER BY id_obrazac DESC;";
$upit = "SELECT * FROM (
  SELECT * FROM dz4_obrazac ORDER BY id_obrazac DESC LIMIT 10) sub 
  ORDER BY id_obrazac ASC;";
$upit = $base->selectDB($upit);

header( "Content-type: text/xml");

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>RSS - Kristijan Čulina</title>
<link>/</link>
<description>Pogledajte zadnjih 10 zapisa zapisanih u obrascu</description>
<language>en-us</language>";

for ($i = 0; $i < 10; $i++)
{
  $row = mysqli_fetch_assoc($upit);
  $id = $row['id_obrazac'];
  $plavi = $row['plavi_borac'];
  $crveni = $row['crveni_borac'];
  $datum = $row['datum'];
  $vrijeme = $row['vrijeme'];
  $kategorija = $row['kategorija'];
  $sudac = $row['sudac'];
  $ocjena = $row['ocjena'];
  $boja = $row['boja'];
  $borba = $row['borba_pogledana'];
  $detalj = $row['detalj_borbe'];
 
  echo "<item>
  <title>$plavi  vs  $crveni</title>
  <description>$detalj</description>
  <link>$ocjena</link>
  </item>";
}
echo "</channel></rss>"

?>