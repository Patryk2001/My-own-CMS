<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <?php include('baza.php');
    $krotkanazwa = $_GET['krotkanazwa'];
    if ($krotkanazwa=='') {
    $krotkanazwa='home';
    }
    else {}
    $edycja = mysqli_query($link, "SELECT * FROM artykuly WHERE krotkanazwa='$krotkanazwa'");
    while($pokaz = mysqli_fetch_array($edycja)) {
    echo "<title>".$pokaz['metatitle']."</title>";
    echo '<meta name="description" content="'.$pokaz['metadesc'].'">';
    echo '<meta name="robots" content="'.$pokaz['robots'].'">';
    };?>
</head>
<body>
<header class="navBackground">
    <nav class="navMenu">   
        <a href="/">Home</a>  
        <?php include('menu.php');?>
    </nav>
</header>
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
    <span></span>
    </label>
    <ul class="menu__box">
        <li class="menu__item" ><ahref="/">Home</a></li>
        <li class="menu__item" ><?php include('menu.php');?></li>
    </ul>
          </div>
    
<!--<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="description" content="Strona o mnie">
        <link rel="stylesheet" href="assets/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        
    </head>
    <body>
        <header class="navBackground">
            <nav class="navMenu">
                <a href="/">Home</a>
                <a href="o_mnie.php">O mnie</a>
                <a href="boks.php">Boks</a>
                <a href="programowanie.php">Programowanie</a>
                <a href="wedkarstwo.php">Wędkarstwo</a>
            </nav>
        </header>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box">
                <li><a class="menu__item" href="/">Home</a></li>
                <li><a class="menu__item" href="o_mnie.php">O mnie</a></li>
                <li><a class="menu__item" href="boks.php">Boks</a></li>
                <li><a class="menu__item" href="programowanie.php">Programowanie</a></li>
                <li><a class="menu__item" href="wedkarstwo.php">Wędkarstwo</a></li>
            </ul>
          </div>-->