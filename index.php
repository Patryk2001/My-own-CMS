<?php require("header.php");
$edycja = mysqli_query($link, "SELECT * FROM artykuly WHERE krotkanazwa='$krotkanazwa'");
while($pokaz = mysqli_fetch_array($edycja)) {?>
	<div class="mainSiteNewPage">
		<h1><?php echo $pokaz['tytul']; ?></h1>
		<p>By Patryk Madzia</p>
	</div>
	<div class="spaceBannerTopNewPage"></div>
	<div>
	<div class="mainNewTextSection">
		<section class="mainNewSection">
		<p><?php echo $pokaz['krotkiopis']; ?></p>
		</section>
	
    <div class="mainNewTextarea">
        <?php echo $pokaz['tresc']; ?>
	</div>
	</div>

<?php }; require("footer.php") ?>