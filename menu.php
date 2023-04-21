<? include('baza.php');?>
<?php $edycja = mysqli_query($link,"SELECT * FROM artykuly ORDER BY menu");
while($pokaz = mysqli_fetch_array($edycja)) {
if($pokaz['menu']!= '0'){
echo '<a href='.$pokaz['krotkanazwa'].'>'.$pokaz['tytulmenu'].'</a>';}}?>
