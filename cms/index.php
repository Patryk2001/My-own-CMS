<?
session_start();
if (isset($_POST['uzytkownik']) and isset($_POST['haselko'])) {
    require('baza.php');
    $uzytkownik = $_POST['uzytkownik'];
    $haselko = $_POST['haselko'];
    if ($uzytkownik === "admin" and $haselko === "admin") {
        
        include('menu.php');
        echo ('<div class="main_content">
        <div class="header">Cześć! Udało Ci się zalogować, teraz możesz zarządzać stroną :D</div>  
        <div class="info">
        <h3>Dawka informacji</h3>
          <div>1. Dodawanie artykułu jest bardzo proste, wystarczy kliknąć Dodaj stronę i zostaniesz przekierowany w bardzo łatwy w obsłudze edytor. Zapoznaj się z nim dokładnie i zacznij swoją przygodę z tworzeniem nowych stron.</div>
          <div>2. Jeśli chcesz edytować lub usunąć stronę którą stworzyłeś wejdź w Strony i wybierz stronę klikając w usuń lub edytuj.</div>
          <div>3. Jeśli zakończyłeś prace nad stronami to pamiętaj aby się wylogować.</div>
      </div>
    </div>
</div>');}
else { echo ('<center>Podales zle dane.<br><a href=index.php>Zaloguj ponownie </a></center>');}
}
else {?>
<html lang="pl">
<head>
        <meta charset="utf-8">
        <title>Panel Admina - CMS</title>
        <link rel="stylesheet" href="main-admin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Panel CMS</h2>
              <p class="text-white-50 mb-5">Podaj swój login i hasło</p>
              <form name="loguj" action="index.php" method="post">
              <div class="form-outline form-white mb-4">
              <h3>Login</h3>
              <input class="form-control form-control-lg" type="text" name="uzytkownik" id="uzytkownik"/>
              </div>

              <div class="form-outline form-white mb-4">
              <h3>Hasło</h3> 
              <input class="form-control form-control-lg"  type="password" name="haselko" id="haselko"/>
              </div>
              <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Zaloguj" />

            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?}?>