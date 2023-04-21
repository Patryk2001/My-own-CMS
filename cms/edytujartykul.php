<?php session_start();?>

<? include('menu.php'); ?>
<? include('../baza.php');?>

  
<main class="main_content">
<div class="header">W tym oknie możesz edytować lub usuwać strony które stworzyłeś.</div>
<section>
<ul>
<?php
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $edycja = mysqli_query($link,"SELECT * FROM artykuly ORDER BY id");
  while($pokaz = mysqli_fetch_array($edycja)) {
   echo '<li class="pages">'.$pokaz['id'].' - '.$pokaz['tytul'];?>
   <span>
   <?php echo '</div><a href=edytujart.php?id='.$pokaz['id'].'>Edytuj</a>';
   ?>
   <?php  if($pokaz['id']!='1') {?>
   <a OnClick="return confirm('Czy napewno chcesz usunąć?');" href=kasujart.php?id=<?php echo $pokaz['id'];?>>KASUJ</a>
   <?php } else{ echo('<span></span>');}; ?>
   </span>
   <?php echo '</li>';}?>
</ul>

</section>
</main>
</body>
</html>