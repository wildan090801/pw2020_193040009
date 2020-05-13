<?php 
$pemainbola = ["Mohammad Sallah" , "Cristiano Ronaldo" , "Lionel Messi" , "Zlatan Ibrahimovic" , "Neymar Jr"]
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>193040009</title>
 </head>
 <body>
  <b> Daftar pemain bola terkenal </b>
  	<ol>
  		<?php foreach ($pemainbola as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>

  	<?php 
  	$pemainbola [] = "Luca Modric";
  	$pemainbola [] = "Sadio Mane";
  	sort($pemainbola)
  	?>
  	<b> Daftar pemain bola terkenal baru </b>
  	<ol>
  		<?php foreach ($pemainbola as $p) :  ?>
  			<li><?=$p; ?></li>
  		<?php endforeach ?>
  	</ol>
	  <br><a href="index.php">Menu</a>
 </body>
 </html>