<?php session_start();?>
<?php 
include('menu.php');
?>
<script type="text/javascript" src="edytor/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: "textarea#tresc",
  theme: "modern",
    width: "800",
  height: "200",
  plugins: [
  "advlist autolink lists link image charmap print preview hr anchor pagebreak",
  "searchreplace wordcount visualblocks visualchars code fullscreen",
  "insertdatetime media nonbreaking save table contextmenu directionality",
  "emoticons template paste textcolor colorpicker textpattern imagetools"
  ],
  toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  toolbar2: "print preview media | forecolor backcolor emoticons",
  image_advtab: true,
});
</script>
<?php 
include('../baza.php');
  ?>
<div class="main_content">
  <div class="header">W tym oknie ponownie możesz edytować stronę</div>  
  <div class="info">
<?php
 $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 $edycja = mysqli_query($link,"SELECT * FROM artykuly WHERE id LIKE ".$_GET['id']."");
 while($pokaz = mysqli_fetch_array($edycja)) {
?>
   <form method="post" action="zapiszart.php">
   <input name="id" hidden readonly id="id" value="<?php echo $pokaz['id']; ?>"><br>
   <label for="metatitle">Meta title:</label><input name="metatitle" id="metatitle" value="<?php echo $pokaz['metatitle'];?>" minlength="40" maxlength="100" required><br><br>
   <label for="metadesc">Meta decription: </label><input name="metadesc" id="metadesc" value="<?php echo $pokaz['metadesc'];?>" minlength="100" maxlength="160" required><br><br>
   <label for="metarobots">Meta robots</label>
   <select name="metarobots" id="metarobots">
          <option value="<?php echo $pokaz['robots'] ?>" selected><?php echo $pokaz['robots'] ?></option>
          <option value="index, follow">index, follow</option>
          <option value="index, nofollow">index, nofollow</option>
          <option value="noindex, follow">noindex, follow</option>
          <option value="noindex, nofollow">noindex, nofollow</option>
  </select><br><br>
  <label for="tytul">Tytuł:</label><input name="tytul" id="tytul" value="<?php echo $pokaz['tytul'];?>" required><br><br>
  <label for="krotkiopis">Krótki opis:</label><input name="krotkiopis" id="krotkiopis" value="<?php echo $pokaz['krotkiopis'];?>" required><br><br>
  <label for="tytulmenu">Tytuł w menu:</label> <input name="tytulmenu" id="tytulmenu" value="<?php echo $pokaz['tytulmenu'];?>" required><br><br>
  <label for="krotkanazwa">Link:</label> <input name="krotkanazwa" id="krotkanazwa" value="<?php echo $pokaz['krotkanazwa'];?>" pattern="[a-z]{4,50}" required><br><br>
  <label for="menu">Kolejność w menu( 0 = nie wyświetlać ):</label> <input type="number" name="menu" id="menu" value="<?php echo $pokaz['menu'];?>" pattern="[0-9]{1,50}" required><br><br>
  <label for="tresc">Treść:</label> <textarea name="tresc" id="tresc"><?php echo $pokaz['tresc'];?></textarea><br>
     <input type="submit" value="zapisz">
  </form>
  <?php }?>
 </div>
 </div>