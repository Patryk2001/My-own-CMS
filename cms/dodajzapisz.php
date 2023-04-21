<?php session_start();?>
<?php include('menu.php');?>
<div class="main_content">
  <div class="header">Udało się?</div>  
  <div class="info">
<?
 require('../baza.php');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$metatitle=$_POST['metatitle'];
$metadesc=$_POST['metadesc'];
$metarobots=$_POST['metarobots'];
$tytul=$_POST['tytul'];
$krotkiopis = $_POST['krotkiopis'];
$tytulmenu=$_POST['tytulmenu'];
$tresc=$_POST['tresc'];
$krotkanazwa=$_POST['krotkanazwa'];
$menu=$_POST['menu'];


$zapytanie=mysqli_query($link,"INSERT INTO `artykuly` (`metatitle`,`metadesc`, `tytul`,`tytulmenu`,`krotkiopis`,`tresc`,`krotkanazwa`, `robots`,`menu`) VALUES ('$metatitle', '$metadesc','$tytul','$tytulmenu', '$krotkiopis','$tresc','$krotkanazwa', '$metarobots','$menu')");
echo ('<br>Dodanie strony '.$tytul.' przebiegła pomyślnie'.'<br>'.'<a href="/cms/admin.php">Powrót do strony głównej</a>');
?>
</div>
</div>