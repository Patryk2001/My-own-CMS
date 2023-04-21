<?php session_start();?>
<? include('menu.php'); include('../baza.php')?>
<div class="main_content">
  <div class="header">Aktualizacja się powiodła?</div>  
  <div class="info">
<?
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$id = $_POST['id'];
$metatitle=$_POST['metatitle'];
$metadesc=$_POST['metadesc'];
$metarobots=$_POST['metarobots'];
$tytul=$_POST['tytul'];
$krotkiopis = $_POST['krotkiopis'];
$tytulmenu=$_POST['tytulmenu'];
$tresc=$_POST['tresc'];
$krotkanazwa=$_POST['krotkanazwa'];
$menu=$_POST['menu'];

$zapytanie=mysqli_query($link,"UPDATE artykuly SET metatitle = '$metatitle', metadesc = '$metadesc', tytul = '$tytul', krotkiopis = '$krotkiopis', tytulmenu ='$tytulmenu', tresc='$tresc', krotkanazwa ='$krotkanazwa',  robots = '$metarobots', menu = '$menu' WHERE id='$id'");
echo ('<br>Aktualizacja artykułu '.$tytul.' przebiegła pomyślnie'.'<br>'.'<a href="/cms/admin.php">Powrót do strony głównej</a>');
?>
</div>
</div>
 
