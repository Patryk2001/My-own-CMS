<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Warsaw" );

define( "DB_SERVER", "localhost" );
define( "DB_NAME", "" );
define( "DB_USERNAME", "" );
define( "DB_PASSWORD", "" );

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("Wystąpił błąd " . mysqli_connect_error());
}

?>