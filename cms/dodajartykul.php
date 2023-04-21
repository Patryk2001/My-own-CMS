<?php session_start();?>

<script type="text/javascript" src="edytor/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: "textarea",
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


<? include('menu.php'); ?>
<div class="main_content">
  <div class="header">W tym oknie możesz opublikować swoją nową stronę</div>  
  <div class="info">
    <form method="post" action="dodajzapisz.php">
    <label for="metatitle">Meta title:</label><input name="metatitle" id="metatitle" minlength="40" maxlength="100" required><br><br>
    <label for="metadesc">Meta decription: </label><input name="metadesc" id="metadesc" minlength="100" maxlength="160" required><br><br>
    <label for="metarobots">Meta robots: </label>
    <select name="metarobots" id="metarobots">
            <option value="index, follow" selected>index, follow</option>
            <option value="index, nofollow">index, nofollow</option>
            <option value="noindex, follow">noindex, follow</option>
            <option value="noindex, nofollow">noindex, nofollow</option>
    </select><br><br>
    <label for="tytul">Tytuł:</label> <input name="tytul" id="tytul" required><br><br>
    <label for="krotkiopis">Krótki opis:</label><input name="krotkiopis" id="krotkiopis" required><br><br>
    <label for="tytulmenu">Tytuł w menu:</label><input name="tytulmenu" id="tytulmenu" required><br><br>
    <label for="krotkanazwa">Link:</label><input name="krotkanazwa" id="krotkanazwa" pattern="[a-z]{4,50}" required><br><br>
    <label for="menu">Kolejność w menu( 0 = nie wyświetlać ):</label> <input type="number" name="menu" id="menu" value="0" pattern="[0-9]{1,50}" required><br><br>
      <h3>Treść strony</h3><br>
      <textarea name="tresc" id="tresc"></textarea><br>
      <input type="submit" value="zapisz">
    </form>
  </div>
</div>