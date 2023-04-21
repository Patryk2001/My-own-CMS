
<?php include('menu.php'); ?>
<?php include('../baza.php');?>
<div class="main_content">
  <div class="header">Skasowałeś stronę, udało się?</div>  
  <div class="info">
<?php
 $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 $zapytanie=mysqli_query($link,"DELETE FROM artykuly WHERE id='$_GET[id]'"); echo ('Artykuł został skasowany'); ?>
</div>
</div>